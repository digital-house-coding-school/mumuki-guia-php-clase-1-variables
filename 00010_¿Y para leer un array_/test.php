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
  $numSpurs = substr_count($sol, "Spurs");
  
  $trampa = $numEmanuel > 1 || $numManu > 1 || $numSpurs > 1;
  
  $this->assertFalse($trampa, "Lamentamos informar que algo parecería estar...raro en tu código. Las palabras 'Emanuel', 'Manu' y 'Spurs' no deberían aparecer más de una vez en el código enviado...");
}