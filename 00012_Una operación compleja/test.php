public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  $this->assertTrue(isset($resultado) && $resultado === 23, 'La variable $resultado no existe o no tiene el resultado esperado');
  
   $numResul = substr_count($sol, "23");
  
  $trampa = $numResul > 0;
  
  $this->assertFalse($trampa, "Lamentamos informar que algo parecería estar...raro en tu código. No deberías haber escrito el número 23 en ningún lado...");
}