<!DOCTYPE html>
<html lang="en">
<head>
    
<title>Cancelar cita</title>
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
      <img src="../imagenes/logoclinica.jpg" alt="Logo" style="width:170px;">
  </a>
  <ul class="navbar-nav">
        <li class="p-2 nav-item color-white">
          <a class="nav-link" href="perfilusuario.php">Perfil</a>
        </li>
        <li class="p-2 nav-item">
          <a class="nav-link" href="crearcita.php">Crear cita</a>
        </li>  
        <li class="p-2 nav-item">
          <a class="nav-link" href="cancelarcita.php">Cancelar cita</a>
        </li>  
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<h2>FROM UPDATE</h2>
<p>The form below contains two input element one of type text and one of type password:</p>
<form method="POST">
<div class="form-group">
      <label for="usr">IdCita:</label>
      <input type="text" class="form-control" id="idcita" required>
    </div>
    
<button type="button" id="submit" class="btn btn-primary">Update</button>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
/* jquery envio de datos seguros*/ 
$(document).ready(function(){
    $("#submit").click(function(){
        var idcita = $("#idcita").val();
       

        if(idcita == ""){
            alert('o');
        }
        else{
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
        });
    });


</script>
</body>
</html>