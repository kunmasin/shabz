<?php 
include ("loginConnect.php");
if (!isset($_COOKIE['admin'])){
    header('location: login.php');
    exit;
}
$sql="SELECT * FROM `registeration` WHERE usernames LIKE '".$_COOKIE['admin']."'";
$user = array();

if($conn->query($sql) == TRUE){
    $sql="SELECT * FROM `registeration` WHERE usernames LIKE '".$_COOKIE['admin']."'";
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $user = $row; 
        }
    }else{
        header('location: login.php');
        exit;
    }
    
}else{
    echo "Error: " .$sql."<br>".$conn->error;
}
$conn->close();

?>