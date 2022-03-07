<?php
    class Cars{
        //Public variable means it can be use throught the whole program
        public $wheel_count = 4;
        //Private means it can be used only by this class
        private $door_count = 4;
        //Protected means it can be used inside this class and inside all of the subclasses that extend this class
        protected $seat_count = 6;

        function car_detail(){
            echo $this -> wheel_count . "<br>";
            echo $this -> door_count . "<br>";
            echo $this -> seat_count . "<br>";
        }
    }

    //This is called instantiating, where we create different instances from the same class and assign them to different variables where we could add different functions
    $bmw = new Cars();
    //Here we can access and echo only the wheel_count property, the other 2 will give us fatal error
    echo $bmw -> wheel_count;
    //We can call all 3 properties here since they are all available inside the Cars class and we are calling the function inside it 
    $bmw -> car_detail();
?>