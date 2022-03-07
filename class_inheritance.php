<?php
    class Cars{
        //Creating a property
        var $wheels = 4;

        //A method is a function declared inside a class
        function greeting(){
            return "Hello";
        }
    }

    $bmw = new Cars();

    //With the word extends the Trucks class inherits everything from the Cars class
    class Trucks extends Cars{
        //This will overwrite the Cars wheels property when used by a variable that instantiates the Trucks class
        var $wheels = 6;
    }

    //Now we can call all the methods and properties from the Cars class since they exists on the Trucks class as well
    $tacoma = new Trucks();
    echo $tacoma -> wheels . "<br>";
    echo $tacoma -> greeting();
?>