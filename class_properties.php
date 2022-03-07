<?php
    class Cars{
        //Declaring a property, we use var inside a class to let php know we are creating a variable, this isn't needed outside of a class
        var $wheel_count = 4;
        var $door_count = 4;

        function car_detail(){
            //This keyword referes to the cars class
            return "This car has " . $this -> wheel_count . " wheels";
        }
    }

    //This is called instantiating, where we create different instances from the same class and assign them to different variables where we could add different functions
    $bmw = new Cars();
    $mercedes = new Cars();

    //We access class properties, there is no need to put the $ sign anymore since it is already declared once inside the class, we can even change its value
    echo $bmw -> wheel_count . "<br>";
    echo $bmw -> wheel_count = 10 . "<br>";
    echo $mercedes -> wheel_count . "<br>";
    echo $mercedes -> car_detail();
?>