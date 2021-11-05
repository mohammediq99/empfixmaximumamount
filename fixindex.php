<?php
// define maximum old value 
$maximumOlValue = 2600000; // for example 
// connect to DB
$mysqli = new mysqli("localhost", "root", "", "empire");
if ($mysqli->connect_errno > 0) {
    die ('Unable to connect to database [' . $mysqli->connect_error . ']');
}
$result = $mysqli->query("SELECT allance_glory_points FROM gloryevent");

//  foreach all rows 
while ($row = $result->fetch_array()) {
    echo '<h3>  '.$row["allance_glory_points"].   '</option>';
    if($row["allance_glory_points"] < 0 ){
        $temp = $row["allance_glory_points"] + $maximumOlValue ;  // get the diffrence 
        $newvalue = $temp + $maximumOlValue ; // add the result to the maximum value 
        // try to save it on the DB by your self :) 
    }
}
?>
