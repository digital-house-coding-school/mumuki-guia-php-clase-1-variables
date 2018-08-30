public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  $this->assertTrue(isset($suma) && $suma === 125, 'La variable $suma parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($resta) && $resta === 75, 'La variable $resta parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($multiplicacion) && $multiplicacion === 2500, 'La variable $multiplicacion parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($division) && $division === 4, 'La variable $division parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($resto) && $resto === 0, 'La variable $resto parecería no existir o no tener el valor esperado');
  
  $numSuma = substr_count($sol, "125");
  $numResta = substr_count($sol, "75");
  $numMult = substr_count($sol, "2500");
  $numDiv = substr_count($sol, "4");
  $numResto = substr_count($sol, "0");
  
  $trampa = $numSuma > 0 || $numResta > 0 || $numMult > 0 || $numDiv > 0 || $numResto > 2;
  
  $this->assertFalse($trampa, "Lamentamos informar que algo parecería estar...raro en tu código. No deberías haber escrito ningún número adicional en tu solución");
}