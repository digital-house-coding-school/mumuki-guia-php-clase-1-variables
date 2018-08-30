public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  $this->assertTrue(isset($resultado) && $resultado === "Había una vez un barco chiquito", 'La variable $resultado parecería no existir o no tener el contenido esperado. ¿Recordaste incluir los espacios?');
  
  $this->assertTrue(isset($parte2) && $parte2 == "un barco", "Ey! No borres las variables default!");
  
   $numResul = substr_count($sol, "barco");
  
  $trampa = $numResul > 1;
  
  $this->assertFalse($trampa, "Lamentamos informar que algo parecería estar...raro en tu código. No deberías haber escrito texto de nuevo...");
}