<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro de cita</title>
<link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  

  <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">

  <style>

    .navbar-light{
      background-color:#87CEFA;
    }

    </style>

   <nav class="p-1 navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="">
      <img src="../imagenes/logoproducto.png" alt="Logo" style="width:170px;">
  </a>

  <ul class="navbar-nav ">
        <li class="p-2 nav-item">
          <a class="nav-link" href="registrodecita.php">Registro de cita</a>
        </li>
        <li class="p-2 nav-item">
          <a class="nav-link" href="crearcita.php">Crear cita</a>
        </li>  
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<body onload="consultarcita()">

<div class="container">
<h2>Tus citas</h2>
<p></p>
<div id="demo"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
 function consultarcita(){
    $.get("../controller/consultarcita.php", function(data, status){
        console.log(data);
        var myObj = JSON.parse(data);
        console.log(myObj);
        var txt="";
        var i= 0;

        txt += "<table class='table'>" +
            "<thead>" +
            "<tr>" +
            "<th>Fecha</th>" +
            "<th>Hora</th>" +
            "<th>Medico</th>" +
            "</tr>" +
            "</thead>" +
            "</tbody>";

            
            for (;myObj[i];) {
            txt += "<tr><td>" + myObj[i].fechac + "</td>" +
            "<td>" + myObj[i].hora +
            "<td>" + myObj[i].nombremedico +
            "</td></tr>";
            i++;
        }

        txt += "</tbody>" +
                "</table>";
        document.getElementById("demo").innerHTML = txt;

    });
 }


 </script>;
</body>
</html>


