<?php
include('config.php');

$column = array('mobile_no', 'billing_date', 'error_reason','reading',);

$query = "SELECT * FROM billing_errors  ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE mobile_no LIKE "%'.$_POST['search']['value'].'%" 
 OR billing_date LIKE "%'.$_POST['search']['value'].'%" 
 OR error_reason LIKE "%'.$_POST['search']['value'].'%" 
 OR reading LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
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
 $sub_array[] = $row['mobile_no'];
 $sub_array[] = $row['billing_date'];
 $sub_array[] = $row['error_reason'];
 $sub_array[] = $row['reading'];


 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM billing_errors";
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
