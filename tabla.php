<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>tabla de multiplicar</title>
</head>
<body>
<header>
	<link rel="stylesheet" href="style.css" type="text/css">
</header>

<?php
	echo "hola <br>";
	for($x=1;$x<=10;$x++){
		echo '<section id="operacion">';
		for($y=1;$y<=10;$y++){
			echo $x." * ".$y." = ".($x*$y).'<br>';
		}
		echo '</section>';
	}
?>

<section>
	<article>
		<aside>
			<form action="datos.php" id="persona" method="post">
				Nombre:<input type="text" name="firstname" value=""><br>
				Apellido:<input type="text" name="lastname" value=""><br>
				<input type="submit" value="Enviar">
			</form>
		</aside>
	</article>
</section>
<footer>
</footer>
</body>
</html>
