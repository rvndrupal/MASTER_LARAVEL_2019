<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

assert_options(ASSERT_WARNING,0);
assert("true==false","***Verdadero nunca será falso***");
print "Ok";
?>