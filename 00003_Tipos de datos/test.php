public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  
  $vars = get_defined_vars();
  $estaNulo = array_key_exists("miNulo", $vars);
  
  $this->assertTrue(isset($miTexto), 'La variable $miTexto no esta definida');
  $this->assertTrue(isset($miNumero), 'La variable $miNumero no esta definida');
  $this->assertTrue(isset($miDecimal), 'La variable $miDecimal no esta definida');
  $this->assertTrue(isset($miVerdad), 'La variable $miVerdad no esta definida');
  $this->assertTrue($estaNulo, 'La variable $miNulo no esta definida');
  
  $this->assertTrue(gettype($miTexto) == "string", 'La variable $miTexto debe ser un texto');
  $this->assertTrue(gettype($miNumero) == "integer", 'La variable $miNumero debe ser un numero entero');
  $this->assertTrue(gettype($miDecimal) == "float", 'La variable $miDecimal debe ser un número decimal');
  $this->assertTrue(gettype($miVerdad) == "bool", 'La variable $miVerdad debe ser un valor de verdad');
  $this->assertTrue(is_null($miNulo), 'La variable $miNulo debe ser nula');
}