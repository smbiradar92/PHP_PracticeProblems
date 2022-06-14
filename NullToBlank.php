<?php


function nullToBlank()
{
    $array = [];                                        // initalise array
    $size = readline("enter the size of the array : ");

    for ($i = 0; $i <= $size; $i++) {
        $array[] = readline("enter the values: ");      // input array values from user
        if ($array[$i] == "null") {                     // null condition
            $array[$i] = " ";
        }
        echo "$array[$i]\n";
    }
}

nullToBlank();              //calling function 

?>