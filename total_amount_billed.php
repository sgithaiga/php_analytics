<?php 
include('config.php');
$total_amount_billed = $conn->query("select sum(amount) from invoice")->fetchColumn();

echo " ". $total_amount_billed;
?>