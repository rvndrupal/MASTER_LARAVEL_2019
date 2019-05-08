<?php  
class Carro{
	const PRECIO_MANTEQUILLA = 1.00;
	const PRECIO_LECHE = 3.50;
	const PRECIO_HUEVOS = 5.90;

	protected $productos = array();

	public function anadir($producto, $cantidad){
		$this->productos[$producto] = $cantidad;
	}

	public function obtener($producto){
		return isset($this->productos[$producto])? $this->productos[$producto] : false;
	}

	public function obtenerTotal($impuesto){
		$total = 0.0;

		$llamada = function($cantidad, $producto) use ($impuesto, &$total){
				$precio = constant(__CLASS__."::PRECIO_".strtoupper($producto));
				$total += ($precio*$cantidad)*($impuesto+1.0);
		};

		array_walk($this->productos, $llamada);

		return $total;
	}
}

$miCarrito = new Carro;

$miCarrito->anadir("mantequilla",3);
$miCarrito->anadir("leche",3);
$miCarrito->anadir("huevo",3);

print $miCarrito->obtenerTotal(0.1);
?>