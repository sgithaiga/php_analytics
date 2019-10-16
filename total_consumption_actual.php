<?php 
include('config.php');
$total_consumption_actual = $conn->query("select sum(consumption) from account_reading")->fetchColumn();

echo " ". $total_consumption_actual;
?>