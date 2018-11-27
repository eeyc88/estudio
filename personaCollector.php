<?php
include_once('persona.php');
include_once('Collector.php');
class personaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM postgres.persona ");        
    $arraPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'idPersona'},$c{'nombrePersona'},$c{'apellidoPersona'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }
  function deletePersona($idPersona) {
    $rows = self::$db->deleteRow("DELETE FROM postgres.persona where id = '$idPersona'",null);   
    return true;          
  }
  function insertPersona($nombrePersona, $apellidoPersona) {
    $rows = self::$db->insertRow("INSERT INTO postgres.persona (nombre, apellido) VALUES ('$nombrePersona' , '$apellidoPersona')",null);             
	return true;
  }
  function updatePersona($idPersona, $nombrePersona, $apellidoPersona) {
    $rows = self::$db->updateRow("UPDATE postgres.persona SET nombre = '$nombrePersona', apellido = '$apellidoPersona' WHERE id ='$idPersona'",null);  
	return true;           
  }
}
?>
