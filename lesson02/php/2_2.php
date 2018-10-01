<?php
$xxx=array(1,2,3,4,5,17);

function even($t){
	return($t%2==0);
}
//elements with even indexes
$xx=array_filter($xxx,"even",ARRAY_FILTER_USE_KEY);
var_dump($xx);
// even elements
$xxxx=array_filter($xxx,"even");
var_dump($xxxx);
?>