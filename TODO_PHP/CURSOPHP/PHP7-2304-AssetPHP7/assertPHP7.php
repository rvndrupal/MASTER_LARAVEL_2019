<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//esta asserts activos =>1, Apagado => 0
ini_set("zend.assertions",1);
//warning => 0 fatal error => 1
ini_set("assert.exception",1);

class SalidaErrores extends AssertionError{}

assert("true==false", new SalidaErrores("Lo verdadero no es falso"));

print "OK";
?>