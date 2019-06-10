<?php
	session_start();
?>
<!DOC HTML>
<html>
<head>
	<meta httpm-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>datos</title>
</head>
<body>

<header>
	<link rel="stylesheet" href="style.css" type="text/css">
</header>
<?php
echo "<section>";
	echo "<article>";

echo "<form>";
 echo 'Nombre:<input type="text" value="'.$_POST['firstname'].'"disabled><br>';
 echo 'Apellido:<input type="text" value="'.$_POST['lastname'].'"disabled><br>';
echo "</form>";

	echo "</article>";
echo "</section>";

$n = $_POST['firstname'];
$m = $_POST['lastname'];

include_once("personaCollector.php");
$PersonaCollectorObj = new personaCollector();
$PersonaCollectorObj->insertPersona($n,$m);


/*foreach ($PersaCollectorObj->showPersonas() as $c){
	echo "<br>";  
	echo "<p>".$c->getIdPersona()."</p><br>"; 
	echo "<p>".$c->getNombrePersona()."</p><br>";
	echo "<p>".$c->getApellidoPersona()."</p>";
}*/

?>
</body>
</html>
