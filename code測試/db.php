<?php
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

$host="127.0.0.1";
$user="root";
$pwd="";
$db="test";

$mysqli=new mysqli($host,$user,$pwd,$db);
?>