<?php
$xxx=array(1,2,3,4,5,17);
$x=1;

function product($x,$t){
	global $x;
	$x*=$t;
	return $x;
}
$x=array_reduce($xxx,"product");
?>