<?php
$text='Not yet registered for the largest free science careers event? It’s not too late to secure your place, sign up now.';
$num=strlen($text);
$to_end='...';
if ($num>50){
$i=47;
 while ($text[$i-1]!==' ' && $text[$i]!==' '){
$i=$i+1;
 }
}
$short_str=substr($text,0,$i);
$short_str_l=rtrim($short_str,' ');	 
var_dump($short_str_l);
$result=$short_str_l.$to_end;
?>