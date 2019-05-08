<?php  
class Perro{
	private $nombre;
	private $tipo;

	public function __construct($nombre, $tipo){
		$this->nombre = $nombre;
		$this->tipo = $tipo;
	}

	public function saludo($cadena){
		return function() use($cadena){
		
			return $cadena.", soy un perro ".$this->tipo." y me llamo ".$this->nombre."<br>";
		
		};
			
	}
}
$canelita = new Perro("Canelita","salchicha");
$saludo = $canelita->saludo("Hola, que tal");
print $saludo();
?>