<?php

$a = 10;
$b = &$a;

$b = $b - 1;

echo $a;
echo "\n";
echo $b;

//https://www.php.net/manual/en/language.references.pass.php
//Perduoti kintamąji pagal nuorodą
function mod(string &$value, string $mark):void
{
	$value = "$mark $value $mark";
}

$x = 'some text';
mod($x, '##+');
echo $x; // '##some text##'


die();