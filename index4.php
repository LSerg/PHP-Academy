<?php

$str = "Это тестовая строчка раз два три четыре пять шесть семь восемь";
$words = explode(' ', $str);
foreach($words as $key => $word){
	if ( !(($key + 1) % 2) ){
		unset($words[$key]);
	}
}
echo $str."<br>";
echo implode(' ', $words);