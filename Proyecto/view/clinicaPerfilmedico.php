<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perfil Medicos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>



  <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
</head>









  
  
</div>


  <style>
    

    .navbar-light{
      background-color:#3498DB;
      font-size: 25px;
      text-decoration-color: white;
      
    }
    

    </style>
    



   <nav class="p-5 navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="navbar-brand " href="homeSA.php">
      <img src="../imagenes/logoproducto.png" alt="Logo" style="width:170px;">
  </a>
  <a class="navbar-brand text-center" href="">
      <img src="../imagenes/medico.png" alt="Logo" style="width: 130px;">
  </a>

  <ul class="navbar-nav"> 
        <li class="p-2 nav-item" >
          <a class="nav-link" href="homeSA.php">Home</a>
          
        </li>
        <li class="p-2 nav-item">
          <a class="nav-link" href="clinicaReportesmedicos.php">Reportes Medicos</a>
          
        </li>  
        
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br></br>


  
  <div class="container text-center">
  
    
  
 
  
  



  
  
      <h2>Medicos</h2>
      
      <div id="demo2"></div>
      <p>
    

      
      <h2>Citas de Hoy</h2>
      
      <div id="demo"></div>
      <p>
    </div>
    
    
    
      


  
  

</body>


  <script>
    window.onload=function() {
			CitasHoyMedico()
      Medicos()
      
      
		      }

                /*
                document.getElementById("input-test").addEventListener("keyup",function(e) {
                    var inputEnfermedad = $("#input-test").val()
                e.preventDefault();
                })  
                ]*/

    function CitasHoyMedico() {
      $.get("../controller/CitasHoyMedico.php", function(data, status) {
        var myObj = JSON.parse(data);
        var txt = "";
        var i = 0;

        txt += "<table class='table'>" +
          "<thead>" +
          "<tr>" + 
          "<th>Fecha</th>" +
          "<th>Hora</th>" +
          "<th>Paciente</th>" +
          "<th>Medico</th>"+
          "<th>Especialidad</th>";
        "</tr>" +
        "</thead>" +
        "<tbody>";

        for (; myObj[i];) {

          txt += "<tr><td>" + myObj[i].fechac + "</td>" +
            "<td>" + myObj[i].hora + "</td>" +
            "<td>" + myObj[i].Paciente + "</td>" +
            "<td>" + myObj[i].Medico + "</td>" +
            "<td>" + myObj[i].Especialidad + "</td></tr>" 

          i++;
        }

        txt += "</tbody>" +
          "</table>";
        document.getElementById("demo").innerHTML = txt;
      });}
      function Medicos() {
      $.get("../controller/Medicos.php", function(data, status) {
        var myObj = JSON.parse(data);
        var txt = "";
        var i = 0;

        txt += "<table class='table'>" +
          "<thead>" +
          "<tr>" +
          "<th>Nombre Medico</th>" +
          "<th>Cedula Profesional</th>" +
          "<th>Especialidad</th>";
        "</tr>" +
        "</thead>" +
        "<tbody>";

        for (; myObj[i];) {

          txt += "<tr><td>" + myObj[i].nombremed + "</td>" +
            "<td>" + myObj[i].cedulap + "</td>" +
            "<td>" + myObj[i].especialidad + "</td></tr>" 

          i++;
        }

        txt += "</tbody>" +
          "</table>";
        document.getElementById("demo2").innerHTML = txt;
      });
    }
      //enfermedadesparecidas()

    

    </script>
</html>