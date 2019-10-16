<?php 
include('config.php');
$count_water_tariff = $conn->query("SELECT count(distinct acc_no) FROM account_tariffs WHERE tariff_code ='TRF01'")->fetchColumn();

echo " ". $count_water_tariff;
?>