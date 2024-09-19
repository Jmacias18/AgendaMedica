<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
  <title>San Antonio Clinic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>

.navbar-light{
  background-color:#87CEFA;
}

</style>



   <nav class="p-3 navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="homeSA.php">
      <img src="../imagenes/logoproducto.png" alt="Logo" style="width:270px;">
</a>
  </div>
   </nav>

</body>


<div class="container">
  <br><h1>Registro de pacientes</h1></br>
  <form action="">
    <div class="form-group">
      <h4><label for="email">Email:</label></h4>
      <input  type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <h4><label for="pwd">Password:</label></h4>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
   
    <div class="form-group">
     <h4> <label for="nompac">Nombre completo:</label></h4>
      <input type="nombrepaciente" class="form-control" id="nompac" placeholder="Enter Nombre del paciente" name="nombrePaciente"  required>
    </div>
    <div class="form-group">
     <h4> <label for="fechanac">Fecha nacimiento:</label></h4>
      <input type="fechanacimiento" class="form-control" id="fechanac" placeholder="Enter fecha de naciniento aaaa/mm/dd"  required>
    </div>
    <div class="form-group">
      <h4><label for="sex">Sexo:</label></h4>
      <input type="sexo" class="form-control" id="sex" placeholder="Enter sexo F or M " name= "sexo" required>
    </div>
    <div class="form-group">
     <h4> <label for="tds">Tipo de sangre:</label></h4>
      <input type="tipoSangre" class="form-control" id="tds" placeholder="Enter tipo de sangre" name="tipodesangre" required>
    </div>
    <div class="form-group">
     <h4> <label for="peso">Peso:</label></h4>
      <input type="Peso" class="form-control" id="peso" placeholder="Enter peso en Kilogramos" name="peso" required>
    </div>
    <div class="form-group">
     <h4> <label for="esta">Estatura:</label> </h4>
      <input type="estatura" class="form-control" id="esta" placeholder="Enter estatura en metros" name="estatura" required>
    </div>
    <div class="form-group">
      <h4><label for="dom">Domicilio:</label> </h4>
      <input type="domicilio" class="form-control" id="dom" placeholder="Enter su Domicilio" name="domicilio" required>
    </div>
    <div class="form-group">
     <h4> <label for="telcas">Telefono de casa:</label> </h4>
      <input type="telefonocasa" class="form-control" id="telcas"  placeholder="Enter telefono casa" name="telefonocasa" required>
</di>
    <div class="form-group">
     <h4> <label for="telcel">Telefono celular:</label> </h4>
      <input type="telefonoCelular" class="form-control" id="telcel" placeholder="Enter telefono celular" name="telefonocel" required>
    </div>
    <div class="form-group">
      <h4><label for="enfe">Enfermedades:</label> </h4>
      <input type="enfermedades" class="form-control" id="enfe" placeholder="Enter enfermedades que padezca" name="enfermedades" required>
    </div>
    <div class="form-group">
     <h4> <label for="aler">Alergias:</label></h4>
      <input type="alergias" class="form-control" id="aler" placeholder="Enter alergias que padezca" name="alergias" required>
    </div>
    <div class="form-group">
<h4> <label for="coa">Cirugias o accidentes:</label> </h4>
      <input type="cirugioasaccidentes" class="form-control" id="coa" placeholder="Enter cirugias o accidentes que a sufrido" name="cirugiasaccidentes" required>
    </div>
    
    <button type="button" class="btn btn-primary" id="button">Resgistrar</button>
  </form>
</div>
<script>

    $("#button").click(function(){

        var email = $('#email').val()
        var password = $('#pwd').val()
        var nombrepaciente = $('#nompac').val()
        var fechanacimiento = $('#fechanac').val()
        var sexo = $('#sex').val()
        var tipoSangre = $('#tds').val()
        var Peso = $('#peso').val()
        var estatura = $('#esta').val()
        var domicilio = $('#dom').val()
        var telefonocasa = $('#telcas').val()
        var telefonoCelular = $('#telcel').val()
        var enfermedades = $('#enfe').val()
        var alergias = $('#aler').val()
        var cirugiasaccidentes = $('#coa').val()

        $.post("../controller/insertPaciente.php",
        {
            correo: email,
            pass: password,
            nompac : nombrepaciente,
            fechanac : fechanacimiento,
            sex : sexo,
            tiposan : tipoSangre,
            pes : Peso,
            esta : estatura,
            domi : domicilio,
            telcasa : telefonocasa,
            telcel : telefonoCelular,
            enfer : enfermedades,
            aler : alergias,
            coa : cirugiasaccidentes

            
        },
        function(data, status){
            console.log(status);
            console.log(data);
            
        });
    }); 
        
    </script>
    </body>
</html>
</html>
