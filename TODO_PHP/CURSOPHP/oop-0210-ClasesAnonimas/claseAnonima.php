<?php  
interface Mensaje{
	public function msg(string $mensaje);
}
class App{
	private $mensaje;

	public function getMensaje():Mensaje{ return $this->mensaje; }
	public function setMensaje(Mensaje $mensaje){ $this->mensaje=$mensaje; }
}

$app = new App();
$app->setMensaje(new class implements Mensaje{
	public function msg(string $mensaje){
		print $mensaje;
	}
});
$app->getMensaje()->msg("Hola, cara de bola");
?>