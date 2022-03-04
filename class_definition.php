<?php
    //Define a class, starts with an upper case
    class Cars{}

    $my_classes = get_declared_classes(); //This function puts all declared classes into one variable

    //We use a foreach loop to loop through our classes, they may be more than 1
    foreach($my_classes as $class){
        echo $class . "<br>";
    }
?>