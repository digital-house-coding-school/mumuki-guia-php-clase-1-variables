public function testDescriptionExample(): void {
  
  /*...content...*/
  $sol = '/*...content...*/';
  
  $this->assertTrue(isset($prueba), 'La variable $prueba no esta definida');
   
  $hayEcho = strpos($sol, 'echo $prueba');
  
  $this->assertTrue($hayEcho !== false, "No olvides de imprimir la variable mediante echo!");
  
}