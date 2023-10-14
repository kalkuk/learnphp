<?php
class Job {
    public function work (ConsoleLogger$logger){
        for ($i=0; $i<10; $i++){
            $logger ->log($i);
            
    }
}
class ConsoleLogger {
    public function log($text){
        echo $text . "\n";
    }
}
interface Logger {
    public function log($text);
}
//kasutaja kood
class NothingLogger implements Logger{
    public function log($text){

    }
}

$job = new Job();
$logger = new NothingLogger
$job->work('asdasd');