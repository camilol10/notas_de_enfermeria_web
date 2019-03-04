<!DOCTYPE HTML>
<html>
<head>
	<title>NOTAS DE ENFERMERIA Camilo Lince</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Notas De Enfermeria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Notas de enfermeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Signos vitales</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Medicamentos</a>
      </li>    
    </ul>
  </div>  
</nav>
<form name="reporte" action="documento.php" method="post" >
	<div class="container">
  <div class="jumbotron">
    <center><h1>Notas De Enfermeria</h1></center> 
    <input disabled="disabled" name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" />
    <center><h4>Paciente</h4></center> 
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist1"   >
        <option>Camilo Lince</option>
       	<option>Martha Cordovez</option>
       	<option>Sebastian Lince</option>
       	<option>Juan Pablo Lince</option>
       	<option></option>
       	<option></option>
      </select>
  </div>
  <center><input type="submit" class="btn btn-info" value="Generar pdf" formtarget="_blank"></center>
   </div>
</div>
<div class="container">
	<center><h3>6:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist2" >
      	<option></option>
        <option>6:00 a.m</option>
       	<option>6:10 a.m</option>
       	<option>6:20 a.m</option>
       	<option>6:30 a.m</option>
       	<option>6:40 a.m</option>
       	<option>6:50 a.m</option>
      </select>
  </div>
</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist3"   >
      	<option></option>
        <option >Paciente alerta se asiste en baño general, limpieza bucal, lubricacion de la piel, vestuario del adulto mayor, arreglo y desinfección de la unidad.</option>
        <option> Paciente desorientado se asiste en baño general, limpieza bucal, lubricacion de la piel, vestuario del adulto mayor, arreglo y desinfección de la unidad.</option>
        <option>Paciente somnoliente en cama, alerta , responde al llamado, sin novedad, tranquilo</option>
        <option>Paciente somnoliente en cama, desorientado , sin novedad, tranquilo</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
        <option> Adulto mayor en la sala en posicion decubito fowler, desorientado,adulto mayor estable y en buenas condiciones.</option>
        <option> Adulto mayor en la sala en posicion decubito fowler, alerta, responde al llamado, orientado en sus tres esferas, adulto mayor estable y en buenas condiciones.</option>
        <option>Adulto mayor  en sala en posicion decubito supino, alerta, responde al llamado.</option>
        <option>Adulto mayor en sala en posicion decubito supino, desorientado.</option>
        <option>Paciente no se encuentra en el hogar.</option>
        <option>Paciente no se encuentra en elhogar, se halla hospitalizado.</option>
      </select>
  </div>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
  <input type="text" class="form-control" name="nov4"  placeholder="Novedades">
</div>
</div>
</div>
<div class="container">
	<center><h3>7:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist5" >
      	<option></option>
        <option>7:00 a.m</option>
       	<option>7:10 a.m</option>
       	<option>7:20 a.m</option>
       	<option>7:30 a.m</option>
       	<option>7:40 a.m</option>
       	<option>7:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist6" >
        <option></option>
        <option>Paciente alerta se asiste en baño general, limpieza bucal, lubricacion de la piel, vestuario del adulto mayor, arreglo y desinfección de la unidad.</option>
        <option> Paciente desorientado se asiste en baño general, limpieza bucal, lubricacion de la piel, vestuario del adulto mayor, arreglo y desinfección de la unidad.</option>
        <option>Paciente somnoliente en cama, alerta , responde al llamado, sin novedad, tranquilo</option>
        <option>Paciente somnoliente en cama, desorientado , sin novedad, tranquilo</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
        <option> Adulto mayor en la sala en posicion decubito fowler, desorientado,adulto mayor estable y en buenas condiciones.</option>
        <option> Adulto mayor en la sala en posicion decubito fowler, alerta, responde al llamado, orientado en sus tres esferas, adulto mayor estable y en buenas condiciones.</option>
        <option>Adulto mayor  en sala en posicion decubito supino, alerta, responde al llamado.</option>
        <option>Adulto mayor en sala en posicion decubito supino, desorientado.</option>
        <option>Paciente no se encuentra en el hogar.</option>
        <option>Paciente no se encuentra en elhogar, se halla hospitalizado.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov7" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>8:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist8" >
      	<option></option>
        <option>8:00 a.m</option>
       	<option>8:10 a.m</option>
       	<option>8:20 a.m</option>
       	<option>8:30 a.m</option>
       	<option>8:40 a.m</option>
       	<option>8:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist9" >
      	<option></option>
        <option>Paciente alerta se asiste en baño general, limpieza bucal, lubricacion de la piel, vestuario del adulto mayor, arreglo y desinfección de la unidad.</option>
        <option> Paciente desorientado se asiste en baño general, limpieza bucal, lubricacion de la piel, vestuario del adulto mayor, arreglo y desinfección de la unidad.</option>
        <option>Paciente somnoliente en cama, alerta , responde al llamado, sin novedad, tranquilo</option>
        <option>Paciente somnoliente en cama, desorientado , sin novedad, tranquilo</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
        <option> Adulto mayor en la sala en posicion decubito fowler, desorientado,adulto mayor estable y en buenas condiciones.</option>
        <option> Adulto mayor en la sala en posicion decubito fowler, alerta, responde al llamado, orientado en sus tres esferas, adulto mayor estable y en buenas condiciones.</option>
        <option>Adulto mayor  en sala en posicion decubito supino, alerta, responde al llamado.</option>
        <option>Adulto mayor en sala en posicion decubito supino, desorientado.</option>
        <option>Paciente no se encuentra en el hogar.</option>
        <option>Paciente no se encuentra en elhogar, se halla hospitalizado.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov10" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>9:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist11" >
      	<option></option>
        <option>9:00 a.m</option>
       	<option>9:10 a.m</option>
       	<option>9:20 a.m</option>
       	<option>9:30 a.m</option>
       	<option>9:40 a.m</option>
       	<option>9:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist12" >
        <option></option>
        <option>Adulto mayor pasa al comedor a desayuno acepta y tolera alimentos vía oral.</option>
        <option>Adulto mayor pasa al comedor a desayuno acepta y no tolera alimentos vía oral.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov13" placeholder="Novedades">
</div>
</div>
</div>
</div>

<div class="container">
	<center><h3>10:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist14" >
      	<option></option>
        <option>10:00 a.m</option>
       	<option>10:10 a.m</option>
       	<option>10:20 a.m</option>
       	<option>10:30 a.m</option>
       	<option>10:40 a.m</option>
       	<option>10:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist15" >
        <option></option>
        <option>Se asiste Adulto mayor a toma de signos vitales.</option>
        <option>Se asiste medicamentos vía oral.</option>
        <option>Se asiste Adulto mayor a toma de signos vitales y se asiste medicamentos vía oral.</option>
        <option>Paciente sentado en sala viendo televisión</option>
        <option>Paciente en habitacion acostado viendo televisión</option>
        <option>Participa en actividades realizados durante el dia.</option>
        <option>No participa en actividades realizados durante el dia.</option>
        <option>Paciente salen a tomar el sol</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov16" placeholder="Novedades">
</div>
</div>
</div>
</div>

<div class="container">
	<center><h3>11:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist17" >
      	<option></option>
        <option>11:00 a.m</option>
       	<option>11:10 a.m</option>
       	<option>11:20 a.m</option>
       	<option>11:30 a.m</option>
       	<option>11:40 a.m</option>
       	<option>11:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist18" >
      	<option></option>
        <option>Se asiste Adulto mayor a toma de signos vitales.</option>
        <option>Se asiste medicamentos vía oral.</option>
        <option>Se asiste Adulto mayor a toma de signos vitales y se asiste medicamentos vía oral.</option>
        <option>Paciente sentado en sala viendo televisión</option>
        <option>Paciente en habitacion acostado viendo televisión</option>
        <option>Participa en actividades realizados durante el dia.</option>
        <option>No participa en actividades realizados durante el dia.</option>
        <option>Paciente salen a tomar el sol</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov19" placeholder="Novedades">
</div>
</div>
</div>
</div>
<hr>
<div class="container">
	<center><h3>12:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist20" >
      	<option></option>
        <option>12:00 p.m</option>
       	<option>12:10 p.m</option>
       	<option>12:20 p.m</option>
       	<option>12:30 p.m</option>
       	<option>12:40 p.m</option>
       	<option>12:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist21" >
        <option></option>
        <option>Adulto mayor pasa al comedor a almuerzo acepta y tolera alimentos vía oral.</option>
        <option>Adulto mayor pasa al comedor a almuerzo acepta y no tolera alimentos vía oral.</option>
        <option>Se asiste Adulto mayalmuerzoal baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov22" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>1:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist23" >
      	<option></option>
        <option>13:00 p.m</option>
       	<option>13:10 p.m</option>
       	<option>13:20 p.m</option>
       	<option>13:30 p.m</option>
       	<option>13:40 p.m</option>
       	<option>13:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist24" >
        <option></option>
        <option>Adulto mayor pasa al comedor a almuerzo acepta y tolera alimentos vía oral.</option>
        <option>Adulto mayor pasa al comedor a almuerzo acepta y no tolera alimentos vía oral.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov25" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>2:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist26" >
      	<option></option>
        <option>14:00 p.m</option>
       	<option>14:10 p.m</option>
       	<option>14:20 p.m</option>
       	<option>14:30 p.m</option>
       	<option>14:40 p.m</option>
       	<option>14:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist27" >
      	<option></option>
        <option>Paciente sentado en sala viendo televisión</option>
        <option>Participa en actividades realizados durante el dia.</option>
        <option>No participa en actividades realizados durante el dia.</option>
        <option>Paciente salen a tomar el sol</option>
        <option>Paciente en habitacion acostado viendo televisión</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov28" placeholder="Novedades">
</div>
</div>
</div>
</div>

<div class="container">
	<center><h3>3:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist29" >
      	<option></option>
        <option>15:00 p.m</option>
       	<option>15:10 p.m</option>
       	<option>15:20 p.m</option>
       	<option>15:30 p.m</option>
       	<option>15:40 p.m</option>
       	<option>15:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist30" >
       <option></option>
        <option>Se asiste asiste onces acepta y tolera alimentos vía oral.</option>
        <option>Se asiste asiste onces acepta y no tolera alimentos vía oral.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov31" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>4:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist32" >
      	<option></option>
        <option>16:00 p.m</option>
       	<option>16:10 p.m</option>
       	<option>16:20 p.m</option>
       	<option>16:30 p.m</option>
       	<option>16:40 p.m</option>
       	<option>16:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist33" >
        <option></option>
        <option>Paciente sentado en sala viendo televisión</option>
        <option>Participa en actividades realizados durante el dia.</option>
        <option>No participa en actividades realizados durante el dia.</option>
        <option>Paciente salen a tomar el sol</option>
        <option>Paciente en habitacion acostado viendo televisión</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov34" placeholder="Novedades">
</div>
</div>
</div>
</div>

<div class="container">
	<center><h3>5:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist35" >
      	<option></option>
        <option>17:00 p.m</option>
       	<option>17:10 p.m</option>
       	<option>17:20 p.m</option>
       	<option>17:30 p.m</option>
       	<option>17:40 p.m</option>
       	<option>17:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist36" >
        <option></option>
        <option>Se asiste cambio a pijama pasa al comedor acepta y tolera alimentos y medicamentos vía oral.
		</option>
		<option>Se asiste cambio a pijama pasa al comedor acepta y tolera alimentos</option>
		<option>adulto mayor estable alerta en su unidad en cama.</option>
		<option>Adulto mayor estable desorientada en su unidad en cama.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov37" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>6:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist38" >
      	<option></option>
        <option>18:00 p.m</option>
       	<option>18:10 p.m</option>
       	<option>18:20 p.m</option>
       	<option>18:30 p.m</option>
       	<option>18:40 p.m</option>
       	<option>18:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist39" >
        <option></option>
        <option>Se asiste cambio a pijama pasa al comedor acepta y tolera alimentos y medicamentos vía oral.
		</option>
		<option>Se asiste cambio a pijama pasa al comedor acepta y tolera alimentos</option>
		<option>adulto mayor estable alerta en su unidad en cama.</option>
		<option>Adulto mayor estable desorientada en su unidad en cama.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal y urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación, urinaria sin novedad.</option>
        <option>Se asiste Adulto mayor para al baño  (+) eliminación fecal, sin novedad.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov40" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>7:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist41" >
      	<option></option>
        <option>19:00 p.m</option>
       	<option>19:10 p.m</option>
       	<option>19:20 p.m</option>
       	<option>19:30 p.m</option>
       	<option>19:40 p.m</option>
       	<option>19:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist42" >
      	<option></option>
        <option>Adulto mayor estable en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov43" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>8:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist44" >
      	<option></option>
        <option>20:00 p.m</option>
       	<option>20:10 p.m</option>
       	<option>20:20 p.m</option>
       	<option>20:30 p.m</option>
       	<option>20:40 p.m</option>
       	<option>20:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist45" >
      	<option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov46" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>9:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist47" >
      	<option></option>
        <option>21:00 p.m</option>
       	<option>21:10 p.m</option>
       	<option>21:20 p.m</option>
       	<option>21:30 p.m</option>
       	<option>21:40 p.m</option>
       	<option>21:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist48" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov49" placeholder="Novedades">
</div>
</div>
</div>
</div>



<div class="container">
	<center><h3>10:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist50" >
      	<option></option>
        <option>22:00 p.m</option>
       	<option>22:10 p.m</option>
       	<option>22:20 p.m</option>
       	<option>22:30 p.m</option>
       	<option>22:40 p.m</option>
       	<option>22:50 p.m</option>
      </select>
  </div>
</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist51" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov52" placeholder="Novedades">
</div>
</div>
</div>
</div>

<div class="container">
	<center><h3>11:00 p.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist53" >
      	<option></option>
        <option>23:00 p.m</option>
       	<option>23:10 p.m</option>
       	<option>23:20 p.m</option>
       	<option>23:30 p.m</option>
       	<option>23:40 p.m</option>
       	<option>23:50 p.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist54" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov55" placeholder="Novedades">
</div>
</div>
</div>
</div>
<hr>

<div class="container">
	<center><h3>12:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">

    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist56" >
      	<option></option>
        <option>00:00 a.m</option>
       	<option>00:10 a.m</option>
       	<option>00:20 a.m</option>
       	<option>00:30 a.m</option>
       	<option>00:40 a.m</option>
       	<option>00:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist57" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov58" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>1:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist59" >
      	<option></option>
        <option>1:00 a.m</option>
       	<option>1:10 a.m</option>
       	<option>1:20 a.m</option>
       	<option>1:30 a.m</option>
       	<option>1:40 a.m</option>
       	<option>1:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist60" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov61" placeholder="Novedades">
</div>
</div>
</div>
</div>

<div class="container">
	<center><h3>2:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist62" >
      	<option></option>
        <option>2:00 a.m</option>
       	<option>2:10 a.m</option>
       	<option>2:20 a.m</option>
       	<option>2:30 a.m</option>
       	<option>2:40 a.m</option>
       	<option>2:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist63" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov64" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>3:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist65" >
      	<option></option>
        <option>3:00 a.m</option>
       	<option>3:10 a.m</option>
       	<option>3:20 a.m</option>
       	<option>3:30 a.m</option>
       	<option>3:40 a.m</option>
       	<option>3:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist66" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov67" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>4:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist68" >
      	<option></option>
        <option>4:00 a.m</option>
       	<option>4:10 a.m</option>
       	<option>4:20 a.m</option>
       	<option>4:30 a.m</option>
       	<option>4:40 a.m</option>
       	<option>4:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist69" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov70" placeholder="Novedades">
</div>
</div>
</div>
</div>
<div class="container">
	<center><h3>5:00 a.m.</h3></center>
<div class="row">
<div class="col-12 col-sm-3 col-md-3 col-lg-3">
	
    <div class="form-group">
      <select class="form-control" id="sel1" name="sellist71" >
      	<option></option>
        <option>5:00 a.m</option>
       	<option>5:10 a.m</option>
       	<option>5:20 a.m</option>
       	<option>5:30 a.m</option>
       	<option>5:40 a.m</option>
       	<option>5:50 a.m</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-9 col-md-9 col-lg-9">
	
    <div class="form-group">
    	
      <select class="form-control" id="sel1" name="sellist72" >
        <option></option>
        <option>Adulto mayor estable descansando en buenas condiciones.</option>
        <option>Adulto mayor descansando tranquilo en su unidad.</option>
        <option>Se asiste adulto mayor al baño y vuelve a su unidad.</option>
        <option>Adulto mayor descansando en posición de cubito lateral derecho.</option>
        <option>Adulto mayor descansando en posición de cubito lateral izquierdo.</option>
        <option>Mayor pasa la noche sin novedad. </option>
        <option>Adulto mayor estable, en su unidad con cambio de pañal, lubricación de glúteos y zona sacra.</option>
      </select>
  </div>

</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
	<div class="form-group">
  <input type="text" class="form-control" name="nov73" placeholder="Novedades">
</div>
</div>
</div>
</div>

<center><input type="submit" class="btn btn-info" value="Generar pdf" formtarget="_blank"></center>
</form>
</body>
</html>