<?php

function dateDiff()
{
    // input from user by converting the input ito time
    $startDate = strtotime(readline("Please enter the first date in yyyy-mm-dd format "));
    $endDate = strtotime(readline("Please enter the second date in yyyy-mm-dd format"));

    // difference of time calculation by converting the time into no. of days
    $difference = ($endDate - $startDate) / (60 * 60 * 24);

    //priting difference values in days
    echo "The differnce between start date and end date is : $difference days";
}
dateDiff();             //calling functn to run th program

?>