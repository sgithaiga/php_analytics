<?php
include('config.php');

$column = array('acc_no', 'meter_no', 'previous_reading','current_reading','consumption','amount','date_entered',);

$query = "SELECT * FROM account_reading  ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE acc_no LIKE "%'.$_POST['search']['value'].'%" 
 OR meter_no LIKE "%'.$_POST['search']['value'].'%" 
 OR previous_reading LIKE "%'.$_POST['search']['value'].'%" 
 OR current_reading LIKE "%'.$_POST['search']['value'].'%" 
 OR consumption LIKE "%'.$_POST['search']['value'].'%" 
 OR amount LIKE "%'.$_POST['search']['value'].'%" 
 OR date_entered LIKE "%'.$_POST['search']['value'].'%" 
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
 $sub_array[] = $row['meter_no'];
 $sub_array[] = $row['previous_reading'];
 $sub_array[] = $row['current_reading'];
 $sub_array[] = $row['consumption'];
 $sub_array[] = $row['amount'];
 $sub_array[] = $row['date_entered'];


 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM account_reading";
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
