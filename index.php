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
        print "Andrew ";

        if($age>20){
            print "can buy specs, mugs and saussage rolls ";
        }
        elseif($age>17){
            print "can buy specs and mugs";
        }
        elseif($age>15) {
            print "can buy specs";
        }
        else{
            print "can't buy anything!";
        }

        ?>
    </p>
    </body>
</html>