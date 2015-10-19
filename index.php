<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>
        <?php

        /*$myName = "Frodo Baggins";
        $myAge = 111;
        echo "My name is " . $myName . "and I am " . $myAge;
        */

        /*$name = "Edgar";
        //$name = "Simon";

        if($name == "Simon"){
            print "I know you!";
        }
        else{
            print "Who are you?";
        }
        */

        $name = "Andrew";
        $age = 21;
        print "Name = Andrew ";

        if($age>15){
            print $name . "can buy specs, ";
        }
        elseif($age>17){
            print $name . "can buy specs and mugs";
        }
        elseif($age>20) {
            print $name . "can buy specs, mugs and saussage rolls";
        }
        else{
            print $name . "can't buy anything!";
        }

        ?>
    </p>
    </body>
</html>