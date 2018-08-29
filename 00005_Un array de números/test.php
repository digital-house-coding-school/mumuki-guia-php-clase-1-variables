public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  $this->assertTrue(isset($miArray), 'La variable $miArray no esta definida');
  $this->assertTrue(is_array($miArray), 'La variable $miArray no es un array');
  $this->assertTrue(count($miArray) == 3, 'El array no tiene 3 elementos...');
  
  for ($i = 0; $i < 3; $i++) {
    $this->assertTrue(array_key_exists($i, $miArray), "No existe la posicion $i del array");
    $this->assertTrue(is_int($miArray[$i]), "En la posición $i del array no hay un número");
  }
  
  $definidoVacio = strpos($sol, '[]');
  $agregado = strpos($sol, '$miArray[]');
  $condicionFinal = $definidoVacio !== false && $agregado !== false;
  
  $this->assertTrue($condicionFinal, "Recorda que queremos que utilices la sintaxis de agregado. No dudes en ver la pista si no la recordas.");
}