<?php session_start();
@$user = $_SESSION['sesion'];
//session_destroy();
if (!isset($user) && empty($user)) {
    header('Location: index.php');
}else{
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css">
	

	<title>SIE</title>
</head>
<body>
	<nav>
        <?php
            include_once '../general/_top.php';
        ?>
        </nav>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row-fluid">
			<div class=""></div>
			<div class="span12">
				<div class="span10 offset1 well">
					<form role="form" id="crearProyecto" action="<?php if (!isset($edit_l) && empty($edit_l)) {print '../../controller/project/save_pr.php';}
                                else{print '../../controller/project/update_pr.php';}?>" method="post">
						<legend>Información</legend>
						<div class="form-group form-inline well">
                                                    <?php
                                                    require_once '../../controller/database/consultas.php';
                                                    $consulta = new Consulta();
                                                    $consulta->setConsulta('SELECT * FROM sie.programs;')
                                                    ?>
							<div class="control-group well">
								<select class="span5" id="strategic_line_id" name="strategic_line_id" required>
									<option value="sleepppp">Seleccione un Programa</option>
								</select>
								<select class="span5" id="program_id" name="program_id" required>
									<option>Seleccione un Proyecto</option>
								</select>
							</div>
							<div class="controls controls-row">
								<input class="span5" type="text" placeholder="Código Proyecto" name="project_id" required>
							</div> <br>
							<div class="controls controls-row">
								<input class="span8" type="text" id="" placeholder="Nombre:*" name="project_name" required>	
							</div><br>
							<div class="controls controls-row">
								<textarea class="span12" rows="4" style="resize:none" id="program_objetive" placeholder="Objetivo:*" name="project_objective" required></textarea>
							</div><br>
							<div class="controls controls-row">
								<input class="span3" type="text" id="program_weighting" placeholder="Ponderación:*" name="program_weighting" required>
							</div><br>
							<div class="controls controls-row">
							<input class="span3" type="text" id="investment" placeholder="Inversión:*" name="investment" required>
							</div><br>
							<div class="controls controls-row">
								<label class="span2" for="deadline_start_date">Vigencia:</label>
								<input class="span4" type="date" id="deadline_start_date" name="deadline_start_date" required>	
								<label class="span1" for="deadline_end_date">a</label>
								<input class="span4" type="date" id="deadline_end_date" name="deadline_end_date" required>	
							</div><br>
						</div>	
					</form>
					<div class=" control controls-row">
						<a class="btn btn-primary span2 offset4 " type="submit" onclick="document.crearProyecto.submit()" value="Crear">Crear</a>
						<a class="btn btn-primary span2 " type="submit" onclick="document.crearProyecto.submit()" value="Cancelar">Cancelar</a>
					</div>
					<legend>Localización</legend>
					<div id="divlocalizacion">		
						<a href="project_location.php" class="btn btn-primary span4">Agregar Localización Proyecto</a>
					</div>		
					<legend>Años de Ejecución</legend>
					<div id="divlocalizacion">		
						<a href="project_year.php" class="btn btn-primary span4">Agregar Años de Ejecución</a>
					</div>	
						
						
					
				</div>	
			</div>
			
		</div>
	</div>
	
	
	
<!--JavaScript================================================================================================-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="../../js/jquery.js"></script>
	<script src ="../../js/bootstrap.min.js"></script>
</body>
</html
<?php }?>