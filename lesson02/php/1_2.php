<?php
$name='anya';
$name_c=str_split($name,1);
$text='PHP provides several functions that fill arrays with values, including array_fill, array_fill_keys, range, and array_pad.';
$text_c = str_split($text,1);
$len=count($name_c);
$counter=array_fill(0,$len,0);
for ($i=0;$i<$len;$i++){
	for ($j=0;$j<count($text_c);$j++){
	if ($text_c[$j]==$name_c[$i])
		$count[$i]++;
}
echo $count[$i].'  ';
}