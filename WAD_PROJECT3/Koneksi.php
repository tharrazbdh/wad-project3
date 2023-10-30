<?php

$conn = mysqli_connect("l27.0.0.1:3306","root","","WAD_PROJECT3");

//insert
// get data from form
// letakkan di var
// create query
//execute

$result = mysqli_query($conn, "SELECT * FROM student");

var_dump ($result);

?>