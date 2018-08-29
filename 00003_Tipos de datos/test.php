public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  
  $this->assertTrue(isset($miTexto), 'La variable $miTexto no esta definida');
  $this->assertTrue(isset($miNumero), 'La variable $miNumero no esta definida');
  $this->assertTrue(isset($miDecimal), 'La variable $miDecimal no esta definida');
  $this->assertTrue(isset($miVerdad), 'La variable $miVerdad no esta definida');
  $this->assertTrue($miNulo === null, 'La variable $miNulo no esta definida o no es nula');
}