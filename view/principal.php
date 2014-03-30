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
	<link rel="stylesheet" href="../css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="../css/bootstrap-responsive.min.css">
	

	<title>SIE</title>
</head>
<body>
	<header>
		
	</header>
        <nav>
            <?php
                include_once 'general/_top.php';
            ?>
        </nav>
	<br><br><br>
	<div class="container">
		<div class="row-fluid">
			<div class="span2"></div>
			<div class="span8">
				<div class="span6 offset3"><img src="../img/frailejon.png">
				</div>	
			</div>
			<div class="span2"></div>
		</div>
		
	</div>
	
	<footer><div class="modal-footer"><br><br><br>
			<div align="center">
 
				<b>Sede:</b> Antigua Vía a Paipa No. 53-70, Municipio Tunja, Boyacá - Colombia
				<br><b>Email:</b>
				<a href="mailto:corpoboyaca@corpoboyaca.gov.co">corpoboyaca@corpoboyaca.gov.co</a> y 
				<a href="mailto:ousuario@corpoboyaca.gov.co">ousuario@corpoboyaca.gov.co</a>
				<br><b>Subdirección Técnica Ambiental y de Planeación y Sistemas</b>
 			</div>
	</div>
	</footer>
	
<!--JavaScript================================================================================================-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="../js/jquery.js"></script>
	<script src ="../js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>