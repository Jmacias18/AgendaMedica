<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reportes Medicos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
</head>
<body>


<style>

  .navbar-light{
    background-color:#3498DB;
    font-size: 25px;
  }

  </style>
  




 <nav class="p-5 navbar navbar-expand-lg navbar-light">
<div class="container-fluid">
<a class="navbar-brand" href="homeSA.php">
    <img src="../imagenes/logoproducto.png" alt="Logo" style="width:170px;">
</a>

<ul class="navbar-nav "> 
      <li class="p-2 nav-item">
        <a class="nav-link" href="homeSA.php">Home</a>
      </li>
      <li class="p-2 nav-item">
        <a class="nav-link" href="crearcita.php"></a>
      </li>  
      <li class="p-2 nav-item">
        <a class="nav-link" href="clinicaPerfilmedico.php">Perfil Medico</a>
      </li>  
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>


  <div class="container text-center">

      <br></br>
      <h2>Top 5 de Pacientes que mas Cancelan Citas</h2>
      <br></br>
      <div id="demo"></div>
      
      <br><br>
      <h3>Pacientes con Enfermedades Parecidas</h3>
      <br><br>
     
      
  <input type-="text" id="inputvalor" class="test-class">Enferemedad</input>
  <button type="submit" id="button" class="btn btn-primary" onclick="enfermedadesparecidas()">Buscar Enfermedad</button>
  <div id="demo2"></div>
  <br><br>
      <h3>Filtro Nombre y Sexo</h3>
      <br><br>

  <input type-="text" id="txtNombre" class="test-class">Sexo</input>
  <input type-="text" id="txtsexo" class="test-class">Nombre</input>
  <button type="submit" id="btnBuscarPaciente" class="btn btn-primary" onclick="filtroSexoOnombre()">Buscar Paciente</button>
  <div id="demo3"></div>
  </div>

</body>

  <script>
    window.onload=function() {
			pacientecitascanceladas()
      
		      }

        /*
    document.getElementById("input-test").addEventListener("keyup",function(e) {
        var inputEnfermedad = $("#input-test").val()
        e.preventDefault();
        })  
        ]*/

    function pacientecitascanceladas() {
      $.get("../controller/pacientecitascanceladas.php", function(data, status) {
        var myObj = JSON.parse(data);
        var txt = "";
        var i = 0;

        txt += "<table class='table'>" +
          "<thead>" +
          "<tr>" +

          "<th>Nombre Paciente</th>" +
          "<th>Email</th>" +
          "<th>Telefono Casa</th>" +
          "<th>Telefono Celular</th>" +
          "<th>Citas Canceladas</th>";
        "</tr>" +
        "</thead>" +
        "<tbody>";

        for (; myObj[i];) {

          txt += "<tr><td>" + myObj[i].nompaciente + "</td>" +
            "<td>" + myObj[i].email + "</td>" +
            "<td>" + myObj[i].telCasa + "</td>" +
            "<td>" + myObj[i].telCel + "</td>" +
            "<td>" + myObj[i].CitasCanceladas + "</td></tr>"

          i++;
        }

        txt += "</tbody>" +
          "</table>";
        document.getElementById("demo").innerHTML = txt;
      });

      //enfermedadesparecidas()

    }

    function enfermedadesparecidas() {

      var inputEnfermedad = $("#inputvalor").val()
      $.post("../controller/nombresparecidos.php", {
            enfermedad: inputEnfermedad

          },
          function(data, status) {
            //console.log(status);
             var myObj = JSON.parse(data);
            //console.log(myObj);
            var txt ="";
            var i = 0;

            txt += "<table class='table'>" +
            "<thead>" +
              "<tr>" +
              
                "<th>Nombre Paciente</th>"+
                "<th> Enmfermedades similares</th>"+
                "<th>Email</th>"+
                "<th>Telefono Casa</th>"+
                "<th>Telefono Celular</th>";
             "</tr>"+
            "</thead>"+
            "<tbody>";
          
            myObj.forEach(object => {
                txt += "  <tr><td>" +  object.nompaciente + "</td>" +
              "<td>" + object.enfermedades + "</td>" +
              "<td>" + object.email + "</td>" +
              "<td>" + object.telCasa + "</td>" +
              "<td>" + object.telCel + "</td></tr>" 
            })
            
            
/*
          for (;myObj[i];){
            txt += "  <tr><td>" + myObj[i].idpaciente + "</td>" +
            "<td>" + myObj[i].nompaciente + "</td>" +
            "<td>" + myObj[i].enfermedades + "</td>" +
            "<td>" + myObj[i].email + "</td>" +
            "<td>" + myObj[i].telCasa + "</td>" +
            "<td>" + myObj[i].telCel + "</td></tr>" 
            

            i++;
          }
*/
          txt += "</tbody>" +
          "</table>";
          document.getElementById("demo2").innerHTML=txt;

          }
          );
        }
          function filtroSexoOnombre() {

          var inputnombre = $("#txtNombre").val()
          var inputsexo = $("#txtsexo").val()
          $.post("../controller/filtroSexoOnombre.php", {
          nombre :inputnombre,
          sexo : inputsexo
    

      },
        function(data, status) {
        //console.log(status);
        var myObj = JSON.parse(data);
        //console.log(myObj);
        var txt ="";
        var i = 0;

          txt += "<table class='table'>" +
          "<thead>" +
          "<tr>" +
          
          "<th>Nombre Paciente</th>"+
          "<th> Sexo</th>"+
          "<th>Email</th>"+
          "<th>Telefono Casa</th>"+
          "<th>Telefono Celular</th>";
          "</tr>"+
          "</thead>"+
          "<tbody>";
    
          myObj.forEach(object => {
          txt += "  <tr><td>" + object.nompaciente + "</td>" +
          "<td>" + object.sexo + "</td>" +
          "<td>" + object.email + "</td>" +
          "<td>" + object.telCasa + "</td>" +
          "<td>" + object.telCel + "</td></tr>" 

          
      })
      
      
          /*
          for (;myObj[i];){
          txt += "  <tr><td>" + myObj[i].idpaciente + "</td>" +
          "<td>" + myObj[i].nompaciente + "</td>" +
          "<td>" + myObj[i].enfermedades + "</td>" +
          "<td>" + myObj[i].email + "</td>" +
          "<td>" + myObj[i].telCasa + "</td>" +
          "<td>" + myObj[i].telCel + "</td></tr>" 
      

           i++;
           }
            */
              txt += "</tbody>" +
              "</table>";
              document.getElementById("demo3").innerHTML=txt;
              

  }
          );
    }     
  </script>

      
</html>