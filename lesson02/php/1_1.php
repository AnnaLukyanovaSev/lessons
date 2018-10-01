<?php
// string task 1
$names=array('Sasha','Petya','Vasya'); //input array of names
$text='sasha and petya go for a vasya.vasya is happy.petya is grumpy.'; //input text
$num=count($names); 
$words=preg_split('/[.|\s]/',$text,-1,PREG_SPLIT_NO_EMPTY); //divide text into words, add delimiter(if needs)
$num_=count($words);
$counter=array_fill(0,$num,0); // error counter for each name

/*foreach ($words as $word){
	if ($word==''){
	unset($word);
	echo 'Ok';
}
}
*/
 for($i=0;$i<$num;$i++){
   $work[$i]=strtolower($names[$i]);	//to low letters
 }

for ($j=0;$j<$num;$j++){
	for($i=0;$i<$num_;$i++){
		if($work[$j]===$words[$i])
		$counter[$j]++;
   }
   echo $counter[$j].'  ';
}

?>