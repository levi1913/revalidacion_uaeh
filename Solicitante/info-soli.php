<?php include('header_soli.php'); ?>
<!-- Solcitar revalidación documentación -->

<br>

<div class="container Direccion">
  <div class="text">
  <center><h1>Datos personales</h1>
  <h2>Dirección del solicitante</h2><br></center>
  </div>
  
  <div class="row info-direccion">

    <div class="col-lg-6">
        <form action="" method=""><!--Información personale-->
           <input type="text" name="calle_estu" placeholder="Calle">
           <input type="text" name="colonia_estu" placeholder="Colonia">
           <input type="text" name="estado_estu" placeholder="Estado">
           <input type="text" name="municipio_estu" placeholder="Municipio"> 
        

    </div>

    <div class="col-lg-6">
        
        <input type="number" name="num_estu" placeholder="No.">
        <input type="text" name="codig_estu" placeholder="Código postal">
        <input type="number" name="tele_estu" placeholder="Teléfono">
        <input type="number" name="cel_estu" placeholder="Celular">
       

    </div>


  </div>
</div>
<br><br>

<div class="container Direccion">

  <div class="text">
        <center><h1>Datos escolares</h1>
        <h2>Datos de escuela de procedencia</h2><br></center>
  </div>

  <div class="row">
      <div class="col-lg-12 info-direccion">
        <input type="text" name="escu_proce" placeholder="Nombre de la escuela">
      </div> 
    <div class="col-lg-12"> <center><h2>Dirección de la escuela</h2></center></div>
     
    <div class="col-lg-6 info-direccion">
           <input type="text" name="codig_estu" placeholder="País">
           <input type="text" name="calle_estu" placeholder="Calle">
           <input type="text" name="colonia_estu" placeholder="Colonia">
           <input type="text" name="estado_estu" placeholder="Estado">
           
    </div>

    <div class="col-lg-6">
        <input type="text" name="municipio_estu" placeholder="Municipio">
        <input type="number" name="num_estu" placeholder="No.">
        <input type="number" name="tele_estu" placeholder="Teléfono">
        <input type="number" name="cel_estu" placeholder="Celular">
    </div>

    <div class="col-lg-12"> <center><h2>Plan de estudios actual</h2></center></div>

    <div class="col-lg-12">
        <label><input type="radio" name="nivel" id="prepa" value="Bachillerato">Bachillerato/Preparatoria</label>
        <label><input type="radio" name="nivel" id="licenciatura" value="Licencitura">Licenciatura</label>
        <label><input type="radio" name="nivel" id="enfermeria" value="Enfermeria">Nivelación de enfermería</label>
    </div><br><br><br>
    
    <div class="col-lg-6">
        <h3>Ultimo semestre cursado:</h3><br>
        <input type="number" name="ult_sem" placeholder="Ultimo semestre cursado">
    </div>

    <div class="col-lg-6">
        <h3>Fecha de término:</h3><br>
        <input type="date" name="fecha-ter" placeholder="Fecha de termino">
    </div>

  </div>
</div><br><br>

<div class="container Direccion">
  <div class="row">
  <div class="col-lg-12"> <center><h2>Causa de abandono de estudios</h2></center></div>
  <div class="col-lg-12 info-direccion">
    <input type="text" name="abandono" placeholder="Causa de abandono">
  </div>

  </div>
</div><br><br>

<div class="container Direccion">
  <div class="row">
  <div class="col-lg-12"> <center><h2>Escuela/Instituto al que desea ingresar</h2></center></div>

  <div id="escula_deseada"class="col-lg-12 info-direccion">
  <input list="escuelas" name="escuelas" placeholder="Nombre de la escuela">
  <datalist id="escuelas">
    <option value="IDA">
    <option value="ICAP">
    <option value="ICBI">
    <option value="ICSA">
    <option value="ICEA">
    <option value="ICSHu">
    <option value="ESA">
    <option value="ESAp">
    <option value="ESAT">
    <option value="ESCS">
    <option value="ESH">
    <option value="ESTe">
    <option value="ESTi">
    <option value="ESTl">
    <option value="ESZi">
    <option value="Prepa 1">
    <option value="Prepa 2">
    <option value="Prepa 3">
    <option value="Prepa 4">
    <option value="Escuela preparatoria Ixtlahuaco">
    <option value="Escuela preparatoria Tlaxoapan">
  </datalist>
  </div>

  <div class="col-lg-12 info-direccion">
    <input type="text" name="carrera_desada" placeholder="Carrera/Programa Académico">
  </div>

  <div class="col-lg-12 info-direccion">
    <input type="text" name="motivo" placeholder="Motivo de solicitud de revalidacion a esta institutción">
  </div>

  <div class="col-lg-12 info-direccion">
    <input type="submit" class="Boton">
</form>
  </div>

  </div>
</div>

<?php include('footer_soli.php'); ?>