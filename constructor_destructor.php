<?php
    class Cars{
        //Public variable means it can be use throught the whole program
        public $wheel_count = 4;
        static $door_count = 4;

        function __construct(){
            echo $this -> wheel_count . "<br>";
            echo self::$door_count++ . "<br>";
        }
    }
    //The __construct method get automatically called right after we instantiate the Cars class
    $bmw = new Cars();
    //Everytime we create an instance the method gets fired
    $ford = new Cars();
    //The __destruct method does the opposite or the contruct method, usually these are used to incremend and destruct to decrement
?>