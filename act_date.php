<?php
$dateToday = 0;

function setCurrentDate() {
    global $dateToday;

    $dateToday = date("m-d-Y");

}

setCurrentDate();

echo "Today is: " . $dateToday;
