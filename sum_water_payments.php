<?php 
include('config.php');
$sum_water_payment = $conn->query("select sum(amount) from payment where payment_for in (1,3)")->fetchColumn();

echo " ". $sum_water_payment;
?>