<?php 
include('config.php');
$count_water_loan = $conn->query("select sum(amount) from payment where payment_for in (2)")->fetchColumn();

echo " ". $count_water_loan;
?>