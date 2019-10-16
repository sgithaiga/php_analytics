<?php 
include('config.php');
$count_accs = $conn->query("SELECT count(*) FROM account_details")->fetchColumn();

echo " ". $count_accs;
?>