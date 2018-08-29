public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  
  $this->assertTrue(isset($prueba), 'La variable $prueba no esta definida');
  $this->assertTrue(gettype($prueba) == "string", 'La variable $prueba debe ser un texto');
  
  $hayVD = strPos($sol, 'var_dump($prueba)');
  
  $this->assertTrue($hayVD !== false, "No olvides analizarla mediante var_dump!");
}