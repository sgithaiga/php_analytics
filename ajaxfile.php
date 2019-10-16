<?php
include('config.php');

$column = array('acc_no', 'phone_no', 'date_sent','amount','transaction_id',);

$query = "SELECT * FROM payments_received ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE acc_no LIKE "%'.$_POST['search']['value'].'%" 
 OR phone_no LIKE "%'.$_POST['search']['value'].'%" 
 OR date_sent LIKE "%'.$_POST['search']['value'].'%" 
 OR amount LIKE "%'.$_POST['search']['value'].'%" 
 OR transaction_id LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY acc_no DESC ';
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
 $sub_array[] = $row['acc_no'];
 $sub_array[] = $row['phone_no'];
 $sub_array[] = $row['date_sent'];
 $sub_array[] = $row['amount'];
 $sub_array[] = $row['transaction_id'];


 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM payments_received";
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
