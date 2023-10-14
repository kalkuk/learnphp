<?php
class Box{
    public $width;
    public static $count =0;
    pubblic static funstion getCount(){
        var_dump(Box::$count);    //self::$count - self viitab endale
        //staatilise funktsiooni puhul ei saa kasutada $this
        //
    }
}

$box1 = new Box();
$box2 = new Box();
$box1::$count =1;
$box2::$count2 =2;
var_dump($box1::$count);
var_dump($box2::$count2);
