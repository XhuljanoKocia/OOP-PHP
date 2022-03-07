<?php
    class Cars{
        function greeting(){
            echo "Hi there!";
        }
    }

    //This is called instantiating, where we create different instances from the same class and assign them to different variables where we could add different functions
    $bmw = new Cars();
    $mercedes = new Cars();

    //Calling the method inside the cars class
    $bmw -> greeting();
?>