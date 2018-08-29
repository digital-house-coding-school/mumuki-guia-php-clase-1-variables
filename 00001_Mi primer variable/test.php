public function testDescriptionExample(): void {
  
  /*...content...*/
  $this->assertTrue(isset($prueba), 'La variable $prueba no esta definida');
  $sol = '/*...content...*/';
   
  $hayEcho = strpos($sol, 'echo $prueba');
  
  $this->assertTrue($hayEcho !== false, "No olvides de imprimir la variable mediante echo!");
  
}