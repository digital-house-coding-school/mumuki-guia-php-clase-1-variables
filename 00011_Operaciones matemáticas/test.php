public function testDescriptionExample(): void {
  /*...content...*/
  $sol = '/*...content...*/';
  $this->assertTrue(isset($suma) && $suma === 125, 'La variable $suma parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($resta) && $resta === 75, 'La variable $resta parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($multiplicacion) && $multiplicacion === 2500, 'La variable $multiplicacion parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($division) && $division === 4, 'La variable $division parecería no existir o no tener el valor esperado');
  $this->assertTrue(isset($resto) && $resto === 0, 'La variable $resto parecería no existir o no tener el valor esperado');
}