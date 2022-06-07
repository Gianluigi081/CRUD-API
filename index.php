<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="/Prueba2022/">
  <title>Gestión de equipos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">

  <script src="https://kit.fontawesome.com/1e30f8602f.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="display-flex mb-4" style="height: 40px; width: 100%;">
      <h6 style="flex: 1 1 auto;">Registro computadores</h6>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <form action="javascript:void(0)" method="POST" onsubmit="aplication.update()">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="mb-3">
                <label class="form-label">ID</label>
                <input type="text" readonly name="gce_id_update" id="gce_id_update" placeholder="ID" class="form-control">
              </div>

              <!-- gce_nombre_equipo -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_nombre_equipo_update" id="gce_nombre_equipo_update" placeholder="Nombre del equipo">
              </div>
              <!-- gce_board -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_board_update" id="gce_board_update" placeholder="Board">
              </div>
              <!-- gce_case -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_case_update" id="gce_case_update" placeholder="Case">
              </div>
              <!-- gce_procesador -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_procesador_update" id="gce_procesador_update" placeholder="Procesador">
              </div>
              <!-- gce_grafica -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_grafica_update" id="gce_grafica_update" placeholder="Gráfica">
              </div>
              <!-- gce_ram -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_ram_update" id="gce_ram_update" placeholder="Ram">
              </div>
              <!-- gce_disco_duro -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_disco_duro_update" id="gce_disco_duro_update" placeholder="Disco">
              </div>
              <!-- gce_teclado -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_teclado_update" id="gce_teclado_update" placeholder="Teclado">
              </div>
              <!-- gce_mouse -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_mouse_update" id="gce_mouse_update" placeholder="Mouse">
              </div>
              <!-- gce_pantalla -->
              <div class="mb-3">
                <input required class="form-control" type="text" name="gce_pantalla_update" id="gce_pantalla_update" placeholder="Pantalla">
              </div>
              <!-- gce_estado -->
              <label class="mb-3 position-relative">

                <select class="form-select" name="gce_estado_update" id="gce_estado_update">  
                  <option value="0">Inactivo</option>
                  <option value="1" selected>Activo</option>
                </select>
              </label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
        </form>
      </div>
    </div>

    <!-- Formulario de inserción -->
    <form action="javascript:void(0)" id="register-form" class="row" onsubmit="aplication.add()">

      <!-- gce_nombre_equipo -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_nombre_equipo" id="gce_nombre_equipo" placeholder="Nombre del equipo">
      </div>
      <!-- gce_board -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_board" id="gce_board" placeholder="Board">
      </div>
      <!-- gce_case -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_case" id="gce_case" placeholder="Case">
      </div>
      <!-- gce_procesador -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_procesador" id="gce_procesador" placeholder="Procesador">
      </div>
      <!-- gce_grafica -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_grafica" id="gce_grafica" placeholder="Gráfica">
      </div>
      <!-- gce_ram -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_ram" id="gce_ram" placeholder="Ram">
      </div>
      <!-- gce_disco_duro -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_disco_duro" id="gce_disco_duro" placeholder="Disco">
      </div>
      <!-- gce_teclado -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_teclado" id="gce_teclado" placeholder="Teclado">
      </div>
      <!-- gce_mouse -->
      <div class="mb-3 col-lg-4 col-sm-6">
        <input required class="form-control" type="text" name="gce_mouse" id="gce_mouse" placeholder="Mouse">
      </div>
      <!-- gce_pantalla -->
      <div class="mb-3 col-sm-6 col-lg-6">
        <input required class="form-control" type="text" name="gce_pantalla" id="gce_pantalla" placeholder="Pantalla">
      </div>
      <!-- gce_estado -->
      <label class="mb-3 col-sm-6 col-lg-6 position-relative">

        <select class="form-select" name="gce_estado" id="gce_estado">
          <option value="0">Inactivo</option>
          <option value="1" selected>Activo</option>
        </select>
      </label>
      <div class="col-12 mb-3 display-grid">
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-plus-square me-2 vertical-align-middle" style="font-size: 1.2em;"></i>
          Agregar
        </button>
      </div>
    </form>
    <h6 class="ms-5">Computadores</h6>
    <!-- Listado -->
    <div class="card">
      <div class="card-body">
        <table id="list-table" class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Board</th>
              <th>Case</th>
              <th>Procesador</th>
              <th>Gráfica</th>
              <th>Ram</th>
              <th>Disco duro</th>
              <th>Teclado</th>
              <th>Mouse</th>
              <th>Pantalla</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody id="computer">
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    var url = "http://localhost/prueba/api.php";
    var modal = new bootstrap.Modal(document.getElementById('exampleModal'), {
      keyboard: false
    });


    var aplication = new function() {
      this.computer = document.getElementById("computer");
      //Modificar
      this.gce_id_update = document.getElementById("gce_id_update");
      this.gce_nombre_equipo_update = document.getElementById("gce_nombre_equipo_update");
      this.gce_board_update = document.getElementById("gce_board_update");
      this.gce_case_update = document.getElementById("gce_case_update");
      this.gce_procesador_update = document.getElementById("gce_procesador_update");
      this.gce_grafica_update = document.getElementById("gce_grafica_update");
      this.gce_ram_update = document.getElementById("gce_ram_update");
      this.gce_disco_duro_update = document.getElementById("gce_disco_duro_update");
      this.gce_teclado_update = document.getElementById("gce_teclado_update");
      this.gce_mouse_update = document.getElementById("gce_mouse_update");
      this.gce_pantalla_update = document.getElementById("gce_pantalla_update");
      this.gce_estado_update = document.getElementById("gce_estado_update");


      //Insertar
      this.gce_nombre_equipo = document.getElementById("gce_nombre_equipo");
      this.gce_board = document.getElementById("gce_board");
      this.gce_case = document.getElementById("gce_case");
      this.gce_procesador = document.getElementById("gce_procesador");
      this.gce_grafica = document.getElementById("gce_grafica");
      this.gce_ram = document.getElementById("gce_ram");
      this.gce_disco_duro = document.getElementById("gce_disco_duro");
      this.gce_teclado = document.getElementById("gce_teclado");
      this.gce_mouse = document.getElementById("gce_mouse");
      this.gce_pantalla = document.getElementById("gce_pantalla");
      this.gce_estado = document.getElementById("gce_estado");

      //Mostrar datos
      this.read = function() {
        var data = "";

        fetch(url)
          .then(r => r.json())
          .then((response) => {
            console.log(response);

            response.map(
              function(computer, index, array) {
                
                data += "<tr "+((computer.gce_estado == 1) ?" style='background:red' ":" ") +">";
                data += "<td>" + computer.gce_nombre_equipo + "</td>";
                data += "<td>" + computer.gce_board + "</td>";
                data += "<td>" + computer.gce_case + "</td>";
                data += "<td>" + computer.gce_procesador + "</td>";
                data += "<td>" + computer.gce_grafica + "</td>";
                data += "<td>" + computer.gce_ram + "</td>";
                data += "<td>" + computer.gce_disco_duro + "</td>";
                data += "<td>" + computer.gce_teclado + "</td>";
                data += "<td>" + computer.gce_mouse + "</td>";
                data += "<td>" + computer.gce_pantalla + "</td>";
                data += "<td>" + computer.gce_estado + "</td>";
                data += '<td><div class="btn-group"><button type="button" class="btn btn-info" onclick="aplication.edit(' + computer.gce_id + ')"><i class="fa fa-pencil" aria-hidden="true"></i></button><button type="button" class="btn btn-danger" onclick="aplication.delete(' + computer.gce_id + ')"><i class="fa fa-trash" aria-hidden="true"></i></button></div>' + '</td>';
                data += "</tr>";
              
            }
            );
            return this.computer.innerHTML = data;

          })
          .catch(console.log);
      }


      //Función de crear
      this.add = function() {

        var data_send = {
          gce_nombre_equipo: this.gce_nombre_equipo.value,
          gce_board: this.gce_board.value,
          gce_case: this.gce_case.value,
          gce_procesador: this.gce_procesador.value,
          gce_grafica: this.gce_grafica.value,
          gce_ram: this.gce_ram.value,
          gce_disco_duro: this.gce_disco_duro.value,
          gce_teclado: this.gce_teclado.value,
          gce_mouse: this.gce_mouse.value,
          gce_pantalla: this.gce_pantalla.value,
          gce_estado: this.gce_estado.value,
        }

        fetch(url + "?add=1", {
            method: "POST",
            body: JSON.stringify(data_send)
          })
          .then(r => r.json())
          .then((data_response) => {
            console.log("Insertados");
            this.read();
          })
          .catch(console.log);

      };

      //Función de eliminar
      this.delete = function(gce_id) {
        console.log(gce_id)

        fetch(url + "?delete=" + gce_id)
          .then(r => r.json())
          .then((data_response) => {
            this.read();
          })
          .catch(console.log);
      }

      //Función de editar
      this.edit = function(gce_id) {
        console.log(gce_id)
        fetch(url + "?query_data=" + gce_id)
          .then(r => r.json())
          .then((data_response) => { 

          this.gce_id_update.value=data_response[0]['gce_id'];; 
          this.gce_nombre_equipo_update.value=data_response[0]['gce_nombre_equipo'];
          this.gce_board_update.value=data_response[0]['gce_board'];
          this.gce_case_update.value=data_response[0]['gce_case'];
          this.gce_procesador_update.value=data_response[0]['gce_procesador'];
          this.gce_grafica_update.value=data_response[0]['gce_grafica'];
          this.gce_ram_update.value=data_response[0]['gce_ram'];
          this.gce_disco_duro_update.value=data_response[0]['gce_disco_duro'];
          this.gce_teclado_update.value=data_response[0]['gce_teclado'];
          this.gce_mouse_update.value=data_response[0]['gce_mouse'];
          this.gce_pantalla_update.value=data_response[0]['gce_pantalla'];
          this.gce_estado_update.value=data_response[0]['gce_estado'];
          })
          .catch(console.log);

        modal.show();
      };

    this.update = function(){

      var data_send = {
          gce_id:this.gce_id_update.value,
          gce_nombre_equipo: this.gce_nombre_equipo_update.value,
          gce_board: this.gce_board_update.value,
          gce_case: this.gce_case_update.value,
          gce_procesador: this.gce_procesador_update.value,
          gce_grafica: this.gce_grafica_update.value,
          gce_ram: this.gce_ram_update.value,
          gce_disco_duro: this.gce_disco_duro_update.value,
          gce_teclado: this.gce_teclado_update.value,
          gce_mouse: this.gce_mouse_update.value,
          gce_pantalla: this.gce_pantalla_update.value,
          gce_estado: this.gce_estado_update.value,
        }

        fetch(url + "?update=1", {
            method: "POST",
            body: JSON.stringify(data_send)
          })
          .then(r => r.json())
          .then((data_response) => {
            console.log("Actualizados");
            this.read();
            modal.hide();
          })
          .catch(console.log);
    }
    }
    aplication.read();
  </script>

</body>

</html>