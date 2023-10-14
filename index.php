<?php
class Box{
    public function __construct($width, $height){
        var_dump('construct', $width, $height);
    }
  }
  $box = new Box();
  var_dump('after $box');
