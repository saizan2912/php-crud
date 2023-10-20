<?php
require_once "database/_dbconnect.php";
$id = $_GET['id'];
$sql = "DELETE FROM `investor` WHERE investor_id = '$id'"; 
$result = mysqli_query($conn, $sql);    
if ($result){
    // echo "Record deleted successfully";
}
else{
    echo "Failed to delete";
}
?>