<?php include('header_admin.php'); ?>
<!-- Editar solicitantes -->

  <div class="folio">
      <center>
        <form action="" method="">
            Folio: 
            <input type="text" name="folio" placeholder="Folio">
            <input type="submit" class="Boton" value="Buscar">
        </form> 
      </center>
  </div>

  <center>
    <div class="contenedor">   

        <div class="info-dada">
            <form>
                Nombre:<br> <input type="text" name="nombre" placeholder="Nombre(s)">
                <input type="text" name="Aapellido" placeholder="Apellido Paterno">
                <input type="text" name="Mapellido" placeholder="Apellido Materno"><br><br>

                Dirección:<br> <input type="text" name="calle" placeholder="Calle">
                <input type="number" name="numero" placeholder="Numero">
                <input type="text" name="colonia" placeholder="Colonia"><br>
                <input type="text" name="municipio" placeholder="Municipio">
                <input type="text" name="estado" placeholder="Estado">
                <input type="text" name="cp" placeholder="Código postal"><br><br><br>

                Contacto:<br> <input type="number" name="celular" placeholder="Numero Celular">
                <input type="number" name="telefono" placeholder="Numero fijo">
                <input type="text" name="correo" placeholder="Correo electrónico"><br><br>

            </form>
        </div>   

        <div class="info-actua">
            <form>
                Nombre:<br> <input type="text" name="nombreA" placeholder="Nombre(s)">
                <input type="text" name="AapellidoA" placeholder="Apellido Paterno">
                <input type="text" name="MapellidoA" placeholder="Apellido Materno"><br><br>

                Dirección:<br> <input type="text" name="calleA" placeholder="Calle">
                <input type="number" name="numeroA" placeholder="Numero">
                <input type="text" name="coloniaA" placeholder="Colonia"><br>
                <input type="text" name="municipioA" placeholder="Municipio">
                <input type="text" name="estadoA" placeholder="Estado">
                <input type="text" name="cpA" placeholder="Código postal"><br><br><br>

                Contacto:<br> <input type="number" name="celularA" placeholder="Numero Celular">
                <input type="number" name="telefonoA" placeholder="Numero fijo">
                <input type="text" name="correoA" placeholder="Correo electrónico"><br><br>

                
                <button id="edit" type="Submit" name="Editar">Editar</button>
            </form>
        </div>
    </div>         

<?php include('footer_admin.php'); ?>