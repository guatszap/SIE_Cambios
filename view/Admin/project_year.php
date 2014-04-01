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
	<div class="container"><br><br><br>
		<div class="row-fluid well">
			<div class="span10 offset1">		
				<form id="ano_ejecucion">		
							<legend>Años de Ejecución</legend>
								<div class="control-group ">
										<input class="span2" type="text" placeholder="*Año:" title="Año">
									 	<input class="span2" type="text" placeholder="Ponderación" title="Ponderación">
										<input class="span3" type="date" title="Fecha de Terminación"></label>
										<a class="btn btn-primary" href="#" type="submit">Agregar</a>
								</div>
					</form>
							<div class="controls controls-row">
								<table class="table table-striped" id="proyectosLocalizacion">
									<thead>
										<th>#</th>
										<th>Año</th>
										<th>Ponderación</th>
										<th>Fecha</th>
										<th></th>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>2013</td>
											<td>25%</td>
											<td></td>
											<td><button type="button" class="btn btn-primary" onclick="agregarPunto(document.tabla)"><i class="icon-remove"></i></button></td>
											
										</tr>
										<tr>
											<td>2</td>
											<td>2014</td>
											<td>25%</td>
											<td></td>
											<td><button type="button" class="btn btn-primary" onclick="agregarPunto(document.tabla)"><i class="icon-remove"></i></button></td>
											
										</tr>
									</tbody>
								</table>
							</div>
			</div>

		</div>
		<a href="project.php" type="submit" class="btn btn-primary span2 offset5">Cancelar</a>
	</div>
<!--JavaScript================================================================================================-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="../../js/jquery.js"></script>
	<script src ="../../js/bootstrap.min.js"></script>
</body>
</html
<?php }?>