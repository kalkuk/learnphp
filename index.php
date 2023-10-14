<?php

$num = 1;
echo($num);
echo 'hello world';
var_dump($num);
var_dump($num);
$num = 1.4;
var_dump($num);
$num ++;
$num /=2;
$num =5;
$num %=2;
var_dump($num);
$string = 'sõne';
$string = 'hello ' .$string;
$string .= '!!!';
var_dump($string);
$hello = "word is $string";



$bool = true;
var_dump($bool);
$bool = false;
var_dump($bool);

$bool = 10>2;
var_dump($bool);
$bool = 10==10;
var_dump($bool);
$bool = 10===10;
var_dump($bool);
$bool = '10'==10;
var_dump($bool);
$bool = 10<=10;
var_dump($bool);
$bool = 10>=10;
var_dump($bool);
$bool = 10<=10;
var_dump($bool);
$bool = '10'!=10;
var_dump($bool);
$null = null;
var_dump($null);
$var;
var_dump($var);

$array = ['adf', 12, true, 5];
var_dump($array);
var_dump($array[0]);
$array[1]= 55;
var_dump($array);
$array[] = 'hello';
var_dump($array);
$array = [
    'name' => 'Kaspar', 
    'age' => 30];
var_dump($array);
$array = [
    'name' => 'Kaspar', 
    'age' => 30,
    1,
    2,
    3
];
var_dump($array);
$array = [
    'name' => 'Kaspar', 
    'age' => 30,
    5 => 1,
    2,
    3
];
var_dump($array);
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
var_dump($array);
var_dump($array[1][2]);

$array =[1,2,3];
$array2 =[4,5,6,7];
$array3 = $array + $array2;
var_dump($array3);


$obj = new stdClass();
$obj ->name = 'Kaspar';
$obj ->age = 30;
var_dump($obj);

function hello(){
    echo "hello world";
}
hello();
hello();
hello();

function sum2($a, $b){
    echo $a +$b;
}
sum2(1,2);

function sum($a, $b){
    return $a+$b;
}
$answer = sum(1,2);
var_dump($answer);
var_dump(sum(3,5));


