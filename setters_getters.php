<?php
    class Cars{
        //Private means it can be used only by this class
        private $door_count = 4;

        function get_values(){
            echo $this -> door_count . "<br>";
        }

        function set_values(){
            echo $this -> door_count = 10 . "<br>";
        }
    }

    //This is called instantiating, where we create different instances from the same class and assign them to different variables where we could add different functions
    $bmw = new Cars();
    //If we call the set_values method before the get_values method the door_count property will be set to 10 and the output will be 10 for both methods, if we call it after the get_value method will be 4 then it will be changed
    $bmw -> set_values();
    $bmw -> get_values();
?>