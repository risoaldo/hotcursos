<?php 
	include ('head.php');
 ?>
<body>
	
<?php 
	
	include ('header.php');
	include ('destaque.php');

		
	if(isset($_GET['menu'])){
	$pagina = $_GET['menu'];
		include($pagina.".php");
	}else{
		include('cursos.php');
		include ('caracteristicas.php');
		include ('localizacao.php');
	}

	include ('footer.php');

 
?>


</body>
</html>