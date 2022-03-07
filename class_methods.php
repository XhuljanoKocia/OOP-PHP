<?php
    class Cars{
        //A method is a function declared inside a class
        function greeting(){}

        function greeting2(){}
    }
    //We check if a method exits, we give it a parameter which is the name of the class
    $the_methods = get_class_methods('Cars');

    //Using a foreach loop to loop through the methods, in our case are only 2
    foreach($the_methods as $method){
        echo $method . "<br>";
    }
?>