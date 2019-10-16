<?php
include('config.php');

$column = array('acc_no', 'prev_meter_no', 'current_meter_no','prev_meter_size','curr_meter_size','prev_meter_reading','new_meter_reading','date_changed','username',);

$query = "SELECT * FROM  meters_history ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE acc_no LIKE "%'.$_POST['search']['value'].'%" 
 OR prev_meter_no LIKE "%'.$_POST['search']['value'].'%" 
 OR current_meter_no LIKE "%'.$_POST['search']['value'].'%" 
 OR prev_meter_size LIKE "%'.$_POST['search']['value'].'%" 
 OR curr_meter_size LIKE "%'.$_POST['search']['value'].'%" 
 OR prev_meter_reading LIKE "%'.$_POST['search']['value'].'%" 
 OR new_meter_reading LIKE "%'.$_POST['search']['value'].'%" 
 OR date_changed LIKE "%'.$_POST['search']['value'].'%" 
 OR username LIKE "%'.$_POST['search']['value'].'%" 
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
 $sub_array[] = $row['prev_meter_no'];
 $sub_array[] = $row['current_meter_no'];
 $sub_array[] = $row['prev_meter_size'];
 $sub_array[] = $row['curr_meter_size'];
 $sub_array[] = $row['prev_meter_reading'];
 $sub_array[] = $row['new_meter_reading'];
 $sub_array[] = $row['date_changed'];
 $sub_array[] = $row['username'];


 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM meters_history";
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
