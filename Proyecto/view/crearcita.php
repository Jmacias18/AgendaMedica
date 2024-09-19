<!DOCTYPE html>
<html lang="en">

<head>
<title>Crear cita</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>

.navbar-light{
  background-color:#87CEFA;
}

.consultation {
  text-align: center;
}

.idmedico{
  text-align: center;
}

.fechas{
  text-align: center;
}
</style>



<link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">

   <nav class="p-3 navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="">
      <img src="../imagenes/logoproducto.png" alt="Logo" style="width:170px;">
  </a>
  <ul class="navbar-nav">
        <li class="p-2 nav-item">
        <h4><a class="nav-link" href="perfilusuario.php">Perfil</a></h4>
        </li>
        <li class="p-2 nav-item">
        <h4><a class="nav-link" href="homeSA.php">Home</a></h4>
        </li>  
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .btn{
    background-color:#3CB371;
    border-color:#3CB371;
  }
</style>

<br>
<div style="text-align:center;">
<p style="font-size:51px; color:black;">Agenda tu cita</p>

<p style="font-size:19px;">Selecciona tu médico con fecha y hora</p>
</div>


<p style="font-size:31px; color:black;" class="consultation fontf title2">Seleciona un médico</p>
		<div class="idmedico">
			<select class="fecha fontf center" id="nombremedico" required>
          <option value=""></option>
					<option>Manuel Barrera</option>
					<option>Maria Perez</option>
					<option>Mario Ruiz</option>
					<option>Jorge Rodriguez</option>
					<option>Lorena Lopez</option>
			
			</select>
		</div>

<div class="resultado"></div>

		<p style="font-size:31px; color:black;" class="consultation fontf title2">Seleciona el día de tu cita</p>
		
    <div style="text-align:center;">
		<input id="fecha1" name="fecha" type="date" class="fechas fontf form-group" required><!--SELECTOR DE LA FECHA-->
    </div>
    
     <div style="text-align:center">
		<p style="font-size:31px; color:black;" class="consultation fontf title2">Seleciona la hora de tu cita</p> 
    <select class="hora" id="hora1" name="">
        <option value=""></option>
        <option>10:00</option>
        <option>11:00</option>
        <option>12:00</option>
        <option>13:00</option>
        <option>16:00</option>
        <option>17:00</option>
        <option>18:00</option>
    </select>
</div>
		<br><br>

  <div style="text-align:center;">  
    <button type="button" id= "button" class="btn btn-primary" 
    rfeh="">CREAR CITA</button>
</div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>

$("#button").click(function(){
	var fecha1 = document.getElementById('fecha1').value;
	var hora1 = document.getElementById('hora1').value;
	var nombremedico = document.getElementById('nombremedico').value;

  if (fecha1 === "" || hora1 === "" || nombremedico === "") {

    alert('Todos los campos son requeridos');

  }else{

    $.post("../controller/crearcita.php",
    {
      fecha: fecha1,
      hora: hora1,
      medico: nombremedico
    },
    function(data, status){
      console.log(data)
      console.log(status);
      var obj = JSON.parse(data);
      alert(obj.estado)
    });
  }
  
  });
</script>
</body>
</html>



  
