<?php include('header_admin.php'); ?>
<!-- Vista de correo -->


<br>
<div class="col-xs-12 col-lg-12">
   	   <center><h1>Correo</h1></center>
   </div>

<br>
    <div class="container-dos">
        <div class="row">

        <div class="col-xs-12 col-lg-6 conte-correo">
	 			<form action="enviar.php" method="POST">
	 				<h2>Correo</h2>
	 				<input type="text" name="Nombre" placeholder="Nombre" required>
					 <input type="text" name="Correo" placeholder="Correo" required>
					 <input type="file" name="archivo" placeholder="Adjuntar" required>
	 				<textarea name="mensaje" placeholder="Escriba aquí su mensaje..." required></textarea>
	 				<input type="submit" class="Boton_dos"value="Enviar" id="button">
	 				
	 			</form>
             </div>
             
        	<div class="col-xs-12 col-lg-6">
        	    <span>Aqui irá el historial de correos</span>
        	</div>
           <br>
           
 		</div>
 	</div>
 	
 	<br>
 
	



<?php include('footer_admin.php'); ?>