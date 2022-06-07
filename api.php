<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//Conection
$server = "localhost";
$user = "root";
$password = "root";
$database_name = "gc_equipos";

$conectionDB = new mysqli($server, $user, $password, $database_name);

#Consultar con base en el id
if (isset($_GET['query_data'])) {
    $sql = mysqli_query($conectionDB, "SELECT * FROM gce_caracteristicas WHERE gce_id=" . $_GET['query_data']);
    if (mysqli_num_rows($sql) > 0) {
        $computers = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        echo json_encode($computers);
        exit();
    } else {
        echo json_encode(['success' => 0]);
    }
}


#Agregar
if (isset($_GET["add"])) {
    $data = json_decode(file_get_contents("php://input"));
    $gce_nombre_equipo = $data->gce_nombre_equipo;
    $gce_board = $data->gce_board;
    $gce_case = $data->gce_case;
    $gce_procesador = $data->gce_procesador;
    $gce_grafica = $data->gce_grafica;
    $gce_ram = $data->gce_ram;
    $gce_disco_duro = $data->gce_disco_duro;
    $gce_teclado = $data->gce_teclado;
    $gce_mouse = $data->gce_mouse;
    $gce_pantalla = $data->gce_pantalla;
    $gce_estado = $data->gce_estado;

    //Comprobar que no están vacios   
    if (($gce_nombre_equipo != "" &&
        $gce_board != "" &&
        $gce_case != "" &&
        $gce_procesador != "" &&
        $gce_grafica != "" &&
        $gce_ram != "" &&
        $gce_disco_duro != "" &&
        $gce_teclado != "" &&
        $gce_mouse != "" &&
        $gce_pantalla != "" &&
        $gce_estado != "")) {

        //Sentencia SQL
        $sql = mysqli_query($conectionDB, "INSERT INTO gce_caracteristicas(gce_nombre_equipo, gce_board,gce_case,gce_procesador,gce_grafica,gce_ram,gce_disco_duro, gce_teclado,gce_mouse,gce_pantalla,gce_estado) VALUES('$gce_nombre_equipo','$gce_board','$gce_case','$gce_procesador','$gce_grafica','$gce_ram','$gce_disco_duro','$gce_teclado','$gce_mouse','$gce_pantalla','$gce_estado') ");

        echo json_encode(["success" => 1]);
    }
    exit();
}

//Actualizar
if (isset($_GET["update"])) {
    $data = json_decode(file_get_contents("php://input"));

    $gce_id = (isset($data->gce_id)) ? $data->gce_id : $_GET["update"];
    $gce_nombre_equipo = $data->gce_nombre_equipo;
    $gce_board = $data->gce_board;
    $gce_case = $data->gce_case;
    $gce_procesador = $data->gce_procesador;
    $gce_grafica = $data->gce_grafica;
    $gce_ram = $data->gce_ram;
    $gce_disco_duro = $data->gce_disco_duro;
    $gce_teclado = $data->gce_teclado;
    $gce_mouse = $data->gce_mouse;
    $gce_pantalla = $data->gce_pantalla;
    $gce_estado = $data->gce_estado;

    $sql = mysqli_query($conectionDB, "UPDATE gce_caracteristicas SET
    gce_nombre_equipo='$gce_nombre_equipo', gce_board='$gce_board',
    gce_case='$gce_case', gce_procesador='$gce_procesador',
    gce_grafica='$gce_grafica', gce_ram='$gce_ram', gce_disco_duro='$gce_disco_duro',
    gce_teclado='$gce_teclado', gce_mouse='$gce_mouse', gce_pantalla='$gce_pantalla',
    gce_estado='$gce_estado' WHERE gce_id='$gce_id'");
}

#Borrar
if (isset($_GET["delete"])) {
    $sql = mysqli_query($conectionDB, "DELETE FROM gce_caracteristicas WHERE gce_id=".$_GET["delete"]);

    if ($sql) {
        echo json_encode(["success" => 1]);
        exit();
    } else {
        echo json_encode(["success" => 0]);
    }
}

#Consultar todos los registros
$sql = mysqli_query($conectionDB, "SELECT * FROM gce_caracteristicas");
if (mysqli_num_rows($sql) > 0) {
    $computers = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    echo json_encode($computers);
} else {
    echo json_encode([["success" => 0]]);
}
