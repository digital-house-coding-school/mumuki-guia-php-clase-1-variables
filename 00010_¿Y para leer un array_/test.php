public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  $nombreCorrecto = isset($nombre) && $nombre === "Emanuel David";

  $this->assertTrue($nombreCorrecto, 'La variable $nombre parecería no existir o no tener el valor correcto');
  
  $apodoCorrecto = isset($apodo) && $apodo === "Manu";
  
  
  
  $this->assertTrue($apodoCorrecto, 'La variable $apodo parecería no existir o no tener el valor correcto');
  
  $this->assertTrue(isset($equipo) && $equipo === "San Antonio Spurs", 'La variable $equipo parecería no existir o no tener el valor correcto');
  
  $numEmanuel = substr_count($sol, "Emanuel");
  $numManu = substr_count($sol, "Manu");
  var_dump($numManu);exit;
}