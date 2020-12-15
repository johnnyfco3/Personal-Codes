<?php
include_once('connection.php');
if (isset($_SESSION['emp_id'])) {
$employee_id = $_SESSION['emp_id'];


$query = "SELECT first_name, last_name, company_name, user_type FROM employee_info WHERE employee_id = $employee_id";

$result = mysqli_query($conn, $query);
$numrows = mysqli_num_rows($result);
if ($numrows != 0){
$row = mysqli_fetch_assoc($result);
}
}
?>