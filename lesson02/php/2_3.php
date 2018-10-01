<?php
$xxx=array(1,2,3,4,5,17);

function sq($x){
	return($x*$x);
}
$res=array_map("sq",$xxx);
var_dump($res);
?>