<?php
$date = "2023-10-18";

$year = date('Y', strtotime($date));

$month = date('F', strtotime($date));   // October
// $month = date('M', strtotime($date));       // Oct
// $month =date('m', strtotime($date));    // 10
echo $year." ".$month
?>