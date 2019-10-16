<?php 
include('config.php');
$count_sewer_tariff = $conn->query("select sum(amount) from payment where payment_for in (4)")->fetchColumn();

echo " ". $count_sewer_tariff;
?>