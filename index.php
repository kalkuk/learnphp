<?php
class Box{
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width *$this->heigth *$this->length ;//this viitab klassi sees iseendale
    }
}
$box = new Box();
$box->width = 10;
$box->height= 10;
$box->length = 10;
$volume = $box->volume();
var_dump($volume);
var_dump($box);

$box2 = new Box();
$box2->width = 20;
$box2->height= 20;
$box2->length = 20;
$volume2 = $box2->volume();
var_dump($box);
var_dump($box2);
var_dump($volume2);

$box3 =$box; //  $box3 =clone $box; 
$box->width =3;
var_dump($box3->width);
var_dump($box->width);
$num =1;
$num2 =$num; //$num2 =&num; 
$num2 = 5;
var_dump($num);
var_dump($num2);

class MetalBox extends Box { //inheritance- võtab kõik Boxi info

}
$box = new Box();
$metalbox->width = 10;
$metalbox->height= 10;
$metalbox->length = 10;
$metalBox = new MetalBox();

var_dump($MetalBox);
var_dump($volume2);


trait MakeSound { /lubab klassidele lisada funktsionaalsusi, klassid ei pea olema omavahel seotud
    public $sound;
    pubclic function makeSound(){
        echo $this ->sound;
    }
} /

$woodBox = new WoodBox();
$woodBox ->sound = 'kolksti';
$woodBox->makeSound();