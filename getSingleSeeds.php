<?php
include "config.php";

$data = array();
$id = $_GET['id'];

$q = mysqli_query($con, "SELECT * FROM 'seeds'");

while($row = mysqli_fetch_object($q)){
    $data[] = $row;
}

echo json_encode($data);
echo mysqli_error($con);