<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--<link rel="stylesheet"  href="bootstrap-4.3.1-dist/css/estilos.css"-->
    <link href="//db.onlinewebfonts.com/c/12d2fa3dcf227b9538084a6bcfeafcf0?family=Trajan+Pro" rel="stylesheet" type="text/css"/>
    <title>Sistema de revalidación</title>
</head>
<body>
        <script>
           function myFunction() {
                var txt;
                if (confirm("Estas a punto de comenzar tu proceso de revalidación, ¿Estas seguro de que la información es correcta?")) {
                    txt = "You pressed OK!";
                } else {
                    txt = "You pressed Cancel!";
                }
                }
        </script>
  <div class="color1">
    <center>
       <img src="img/garza_uaeh_registrada.png" width="160" height="100">
    </center>
  </div>
     
	<nav class="navbar navbar-dark navbar-expand-lg letra color2 "></nav>

 
  <center><h1 class="letra-enca">Registro</h1></center><br>


 
       
        <div class="registro-formulario letra" align="justify">
        <center>
            <form action="" method="">
               Nombre(s)<br>
               <input type="text" name="nombres" placeholder="Nombre(s)">

               <div class="apellidos">
                    Apellidos<br>
                    <input type="text" name="apellidoP" placeholder="Apellido Paterno">
                    <input type="text" name="apellidoM" placeholder="Apellido Materno"><br>
                </div>
               
               Correo<br>
               <input type="email" name="email" placeholder="Correo electrónico"><br>
               CURP<br>
               <input type="text" name="curp" placeholder="CURP"><br>
               Contraseña<br>
               <input type="password" name="contra" placeholder="Contraseña nueva"><br><br>

               <input type="submit" class="Boton" onclick="myFunction()" name="registro-boton" value="Registrar">
        </center>

            </form>
        </div>
     
 


 <br><br><br>

    <center>
    <div class="pie_gris">
        <p>Revalidación de materias</p>
    </div>
    
    <div class="pie_negro">
    <p>© 2016 Derechos Reservados<br>
    Universidad Autónoma del Estado de Hidalgo</p>
    </div>


 <script src="bootstrap-4.3.1-dist/js/jquery-3.3.1.min.js"></script>
 <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>




