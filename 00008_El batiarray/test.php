public function testDescriptionExample(): void {
  /*...content...*/
  
  
  
  $this->assertTrue(isset($batman), 'La variable $batman no esta definida');
  $this->assertTrue(is_array($batman), 'La variable $batman no es un array');

  
  $this->assertTrue(count($batman) == 5, 'El array no tiene 5 elementos...');
  
  
  $cinturon = array_pop($batman);
  $estatura = array_pop($batman);
  $peso = array_pop($batman);
  $apellido = array_pop($batman);
  $nombre = array_pop($batman);
  
  $nombreCorrecto = is_string($nombre) && strtolower($nombre) == "bruno";
  
  $this->assertTrue($nombreCorrecto, 'El nombre de Batman pareceria no ser correcto o no estar en la primer posición...");
  

  
  
}