public function testDescriptionExample(): void {
  global $sarasa;
  $this->assertTrue(isset($sarasa), "La sarasa no esta definida");
  $this->assertTrue(gettype($sarasa) == "string", "<b>La sarasa debe ser un string</b>");
}