<?php
include('config.php');

$column = array('acc_no', 'current_debt_date', 'current_balance ', 'loan_balance ', '30_days ', '60_days ', '90_days ', 'over_90 ',);

$query = "SELECT * FROM debtor_balances";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE acc_no LIKE "%'.$_POST['search']['value'].'%" 
 OR current_debt_date LIKE "%'.$_POST['search']['value'].'%" 
 OR current_balance  LIKE "%'.$_POST['search']['value'].'%" 
 OR loan_balance LIKE "%'.$_POST['search']['value'].'%" 
 OR 30_days LIKE "%'.$_POST['search']['value'].'%" 
 OR 60_days LIKE "%'.$_POST['search']['value'].'%" 
 OR 90_days LIKE "%'.$_POST['search']['value'].'%" 
 OR over_90 LIKE "%'.$_POST['search']['value'].'%" 
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
 $sub_array[] = $row['current_debt_date'];
 $sub_array[] = $row['current_balance'];
 $sub_array[] = $row['loan_balance'];
 $sub_array[] = $row['30_days'];
 $sub_array[] = $row['60_days'];
 $sub_array[] = $row['90_days'];
 $sub_array[] = $row['over_90'];
 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM debtor_balances";
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
