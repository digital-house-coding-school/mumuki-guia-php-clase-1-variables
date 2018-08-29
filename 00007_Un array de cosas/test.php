public function testDescriptionExample(): void {
  /*...content...*/
  
  $sol = '/*...content...*/';
  $this->assertTrue(isset($miArray), 'La variable $miArray no esta definida');
  $this->assertTrue(is_array($miArray), 'La variable $miArray no es un array');
  $this->assertTrue(count($miArray) == 3, 'El array no tiene 3 elementos...');
  
  $tipos = ["string", "double", "boolean"];
  $i = 0;
  foreach ($miArray as $value) {
    $this->assertTrue(gettype($value) == $tipos[$i], "El valor '$value' no es un " . $tipo[$i]);
    $i++;
  }
}