<?php
    class Cars{
        static $wheel_count = 4;

        //If we use static on a method we need to call the properties the same way and all the properties should be all set to static else it generates error
        static function car_detail(){
            //We can use self to access the property
            return self::$wheel_count;
        }
    }

    class Trucks extends Cars{
        static function display(){
            echo parent::car_detail();
        }
    }

    Trucks::display();
?>