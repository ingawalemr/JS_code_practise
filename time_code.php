<?php
// echo time(); 				// 1697955307
// echo date("Y-m-d", time());  // 2023-10-22
// echo date("Y-m-d"); 			// 2023-10-22


// find date after 24 hours, 30 min and 25 seconds from current time
echo date("Y-m-d"); 			// 2023-10-22
echo "<br>";
$seconds = (24*60*60)+(30*60)+(25);
// echo " seconds ". $seconds; 			//  seconds - 88225
$total_seconds = $seconds + time();
// echo " total seconds ". $total_seconds;  // total seconds - 1698043997
echo date("Y-m-d", $total_seconds); 	//	2023-10-23
?>