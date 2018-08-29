public function testDescriptionExample(): void {
  /*...content...*/
  
  $sol = '/*...content...*/';
  $this->assertTrue(isset($miArray), 'La variable $miArray no esta definida');
  $this->assertTrue(is_array($miArray), 'La variable $miArray no es un array');
  $this->assertTrue(count($miArray) == 3, 'El array no tiene 3 elementos...');
  

    $this->assertTrue(array_key_exists(10, $miArray), "No existe la posicion 10 del array");
    $this->assertTrue(is_int($miArray[10]), "En la posición 10 del array no hay un número");
    
    $this->assertTrue(array_key_exists(15, $miArray), "No existe la posicion 15 del array");
    $this->assertTrue(is_int($miArray[15]), "En la posición 15 del array no hay un número");
    
    $this->assertTrue(array_key_exists(18, $miArray), "No existe la posicion 18 del array");
    $this->assertTrue(is_int($miArray[18]), "En la posición 10 del array no hay un número");
  
  
  $definidoVacio = strpos($sol, '[]');
  $condicionFinal = $definidoVacio !== false;
  
  $this->assertTrue($condicionFinal, "Recorda que queremos que utilices la sintaxis de agregado. No dudes en ver la pista si no la recordas.");
}