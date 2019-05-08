<?php  
class A{
	function __construct($valor){
		$this->val = $valor;
	}

	function getClosure(){
		return function(){ return $this->val; };
	}
}

$ob1 = new A(1);
$ob2 = new A(5);

$cl = $ob1->getClosure();
print $cl();
print "<hr>";
$cl = $cl->bindTo($ob2);
print $cl();
?>