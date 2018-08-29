public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  
  $this->asserTrue(isset($miTexto), 'La variable $miTexto no esta definida');
  $this->asserTrue(isset($miNumero), 'La variable $miNumero no esta definida');
  $this->asserTrue(isset($miDecimal), 'La variable $miDecimal no esta definida');
  $this->asserTrue(isset($miVerdad), 'La variable $miVerdad no esta definida');
}