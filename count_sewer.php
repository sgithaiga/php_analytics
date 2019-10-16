<?php 
include('config.php');
$count_sewer_tariff = $conn->query("SELECT count(distinct acc_no) FROM account_tariffs WHERE tariff_code ='TRF02'")->fetchColumn();

echo " ". $count_sewer_tariff;
?>