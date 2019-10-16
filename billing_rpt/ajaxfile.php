<?php
include('config.php');

$column = array('invoice_no', 'meter_no', 'periodbegin','total_units','amount','invoice_raised','balance_after_invoice','acc_no','payment_amount',);

$query = "SELECT * FROM invoice ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE invoice_no LIKE "%'.$_POST['search']['value'].'%" 
 OR meter_no LIKE "%'.$_POST['search']['value'].'%" 
 OR periodbegin LIKE "%'.$_POST['search']['value'].'%" 
 OR total_units LIKE "%'.$_POST['search']['value'].'%" 
 OR amount LIKE "%'.$_POST['search']['value'].'%" 
 OR invoice_raised LIKE "%'.$_POST['search']['value'].'%" 
 OR balance_after_invoice LIKE "%'.$_POST['search']['value'].'%" 
 OR acc_no LIKE "%'.$_POST['search']['value'].'%" 
 OR payment_amount LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY invoice_no DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $conn->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $conn->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['invoice_no'];
 $sub_array[] = $row['meter_no'];
 $sub_array[] = $row['periodbegin'];
 $sub_array[] = $row['total_units'];
 $sub_array[] = $row['amount'];
 $sub_array[] = $row['invoice_raised'];
 $sub_array[] = $row['balance_after_invoice'];
 $sub_array[] = $row['acc_no'];
 $sub_array[] = $row['payment_amount'];


 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM invoice";
 $statement = $conn->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($conn),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>
