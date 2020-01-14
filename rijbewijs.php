<?php
    $teJong = "Helaas, je mag nog niet beginnen met rijlessen.";
    $oudGenoeg = "Je mag beginnen met rijlessen!";
    $age = readline("Hoe oud ben je?");

    if($age < "16,5") {
        readline($teJong);
    }
        else {
            readline($oudGenoeg);
        }

        echo($age);

?>

