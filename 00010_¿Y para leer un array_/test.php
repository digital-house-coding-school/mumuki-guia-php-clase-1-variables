public function testDescriptionExample(): void {
  
  $this->assertTrue(isset($nombre) && $nombre == "Emanuel David", 'La variable $nombre parecería no existir o no tener el valor correcto');
  
  $this->assertTrue(isset($apodo) && $apodo == "Manu", 'La variable $apodo parecería no existir o no tener el valor correcto');
  
  $this->assertTrue(isset($equipo) && $equipo == "San Antonio Spurs", 'La variable $equipo parecería no existir o no tener el valor correcto');
}