<?php

$arr = array('Ira', 'Alexander', 'Alexey', 'Maxim');
$arr[] = 'Ivan'; // 4
$arr[5] = 'Vlad'; // 10
$arr[10] = 'Oleg'; // 10
$arr[] = 'Igor'; // 11
$arr[8] = 'Petr'; // 12

$str = "Это тестовая строчка раз два три четыре пять шесть семь восемь";
$words = explode(' ', $str);
foreach($words as $key => $word){
	if ( ($key + 1) % 2 ){
		$need_words[] = $word;
	}
}
echo $str."<br>";
echo implode(' ', $need_words);

//echo "<pre>"; print_r($need_words);

//echo implode(' - ', $arr);

/*
$str = "Это тестовая строчка раз два три test";
$words = explode(' ', $str);
echo "<pre>";
echo "В этой строчке столько слов: " . count($words);
*/

/*for($i = 0; $i < count($arr); $i++){
	echo $arr[$i] . "<br>";
}
$i = 1;
foreach($arr as $key => $student){
	// тело цикла
	echo "Итерация № {$i} " . $key . ' = ' . $student . "<br>";
	$i++;
}*/


/*if ( isset($arr[9]) ){
	echo "Ок";
} else {
	echo "Not ok";
}

echo "<pre>";
print_r($arr); */