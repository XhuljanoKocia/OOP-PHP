<?php
    class Cars{
        public $wheel_count = 4;
        static $door_count = 4;

        //If we use static on a method we need to call the properties the same way and all the properties should be all set to static else it generates error
        static function car_detail(){
            echo Cars::$door_count;
        }
    }

    //This is called instantiating, where we create different instances from the same class and assign them to different variables where we could add different functions
    $bmw = new Cars();
    echo $bmw -> wheel_count . "<br>";
    //echo $bmw -> door_count . "<br>"; This will generate an error undefined property
    //In order to access the static property we do it this way, this can be done to a method as well
    echo Cars::$door_count . "<br>";
    echo Cars::car_detail();
?>