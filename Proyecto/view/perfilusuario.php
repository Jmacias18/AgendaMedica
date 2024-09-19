<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil de usuario</title>
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



   <nav class="p-3 navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="">
      <img src="../imagenes/logoproducto.png" alt="Logo" style="width:170px;">
  </a>

  <ul class="navbar-nav">
        <li class="p-2 nav-item">
          <h4><a class="nav-link" href="crearcita.php">Crear cita</a></h4>
          <h5><a class="nav-link" href="homeSA.php">Home</a></h5>
        </li>  
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body onload="consultarcita()">

<div class="container"> 
<br>
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

        txt += "<table class='table'>"  +
        
            "<thead>" +
            "<tr>" + "<tbody style='background: rgba(238,232,170)'; border: 1px solid rgba(250,250,210)>"+ "<opacity: 0.1;>"+
            "<th><center>Fecha</th>" +
            "<th><center>Hora</th>" +
            "<th><center>Médico</th>" +
            "<th><center>Cancelar cita</th>" +
            "</tr>" +
            "</thead>" +
            "</tbody>";
            console.log(myObj);
            
            for (;myObj[i];) {
            txt += "<tr><td><center>" +  myObj[i].fechaC + "</td>"  + 
            "<td><center>" + myObj[i].hora + "</td>"  + 
            "<td><center>" + myObj[i].nombremedico +
            "<td><center> <button type='butto' class='btn btn-danger' onclick=cancelarCita("+myObj[i].idcitas+")>Cancelar</button></center></td>" + 
             
            "</td></tr>";
            i++;
        }

        txt += "</tbody>" +
                "</table>";
        document.getElementById("demo").innerHTML = txt;

    });
 }


 function cancelarCita(idcita){
  alert(idcita)
  $.post("../controller/updatecita.php", 
            {
              idcita: idcita
                
            },
            function (data, status){
                console.log(data);
                $obj = JSON.parse(data);
                if($obj == false){
                    alert("No se encuentro la cita");
                }
                else if($obj == true){
                    alert("Cita cancelada");
                }
                else{
                    alert("Error de cancelar cita");
                }
            });
 }
 </script>;






</body>
</html>



  
