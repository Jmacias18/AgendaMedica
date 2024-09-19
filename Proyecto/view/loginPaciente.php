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
<body>
<div class="container text-center">
  
   <br> <h2 class="text-center">Inicia Sesion</h2></br>
    <h3><p class="text-center"> Introduzca su correo y password para iniciar sesion</p></h3>
    
    <div class="form-group">
        <div id= "error"></div>
        <label for="usr">Email:</label>
        <input type="email" class="form-control" id="em" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
        <label for="pwd"> Contraseña:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <button type="button" id="submit" class="btn btn-primary">Iniciar Sesion</button>
</body>
    <script>
        
        $(document).ready(function(){
            $("#submit").click(function(){
                var email = $("#em").val();
                var password = $("#pwd").val();

                if (email == "" || password == ""){

                    $("#error").text("campos vacios");
                    $("#error").css("color","red");
                }
                else
                {
                    $.post("../controller/loginPaciente.php",
                    {
                        email: email,
                        password: password
                    },
                    function(data,status){

                        var obj = JSON.parse(data);

                        if(obj.estado == true)
                        {
                            window.location.replace("perfilusuario.php");
                        }
                        else if(obj.estado == false){
                            $("#error").text("Error al iniciar sesion");
                            $("#error").css("color","red");
                        }
                    });
                }
                
            });
        });
        
</script>
</html>
