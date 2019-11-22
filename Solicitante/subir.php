<?php include('header_soli.php'); ?>
<!-- Subir documentación -->
<br>

<div class="container">
  <div class="row margen">

    <div class="col-lg-6 instrucciones">
    <h2>Pasos a seguir</h2>
    <ul>
      <li><h5>Ingresa a <a href="https://drive.google.com">Google Drive.</a></h5></li>
      <li><h5>Inicia sesión con tu cuenta de gmail y en caso de no tener una creala <a href="https://accounts.google.com/signup/v2/webcreateaccount?flowName=GlifWebSignIn&flowEntry=SignUp">aquí</a>.</h5></li>
      <li><h5>Crea una carpeta con tu nombre comenzando por apellidos.</h5></li>
      <li><h5>Coloca dentro de tu carpeta todos los papales solicitados para el trámite de revalidación.</h5></li>
      <li><h5>Una vez terminada la subida de datos, da clic derecho sobre la carpeta y seguido de un segundo clic en "Compartir".</h5><center><img src="../img/compartir.png"></center></li>
      </ul>
    
    </div>

    <div class="col-lg-6 instrucciones">
    <ul>
      <li><h5>Se te mostrará una opción para compartir la carpeta, deberas dar clic en "Obtener vinculo para compartir".</h5><center><img src="../img/vinculo.png"></center></li>
      <li><h5>Inmediatamente te aparecerá tu link para compartir tu información, copia y pega ese link en "Liga de google drive" en esta página.</h5></li>
  
    </ul>
    </div>
  
  </div><br>  

  <div class="row">

    <div class="col-lg-12 liga">
        <form action="" method="">
        
        <center><h2>Liga de google drive:</h2></center>
        <input type="url" name="liga" placeholder="Copia el link de tu carpeta en google drive">
        <center><input type="submit" class="Boton" value="Subir" onclick="seguridad()"></center>
    
        </form>

      </div>
  </div>

   

</div>



<?php include('footer_soli.php'); ?>