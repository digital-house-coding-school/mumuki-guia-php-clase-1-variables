public function testDescriptionExample(): void {
  global $prueba;
  $this->assertTrue(isset($prueba), 'La variable $prueba no esta definida');
  
  $solucion = /*...content...*/;
  
  $hayEcho = strpos($solucion, "echo $prueba;");
  
  $this->assertTrue($hayEcho !== false, "No olvides imprimirla con echo");
}