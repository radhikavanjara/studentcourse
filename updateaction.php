<!DOCTYPE html>
<html>
<head>

<title>Record Updated</title>

<style>
body {background-color: #fff2e6;}

h2 {
    color: #00264d;
}
input[type=submit] {
    background-color: #00264d;
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;    
    font-size: 17px;}

    form {
    display: inline-block;
    text-align: center;
    }


</style>

</head>

<body>



<?php 

$servername = "radhika.com";
$username = "root";
$password = "gurudev1995";
$database = "Student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else

$sid = $_GET["Student_ID"];
$sql = "UPDATE StudentInfo SET email='".$_GET["email"]."', PhoneNo='".$_GET["PhoneNo"]."',Pincode='".$_GET['Pincode']."' WHERE Student_ID=".$sid.";";


if(mysqli_query($conn, $sql)){
     //$last_id = mysqli_insert_id($conn);
} 
else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

$sql2 = "DELETE FROM StudentCourse WHERE Student_ID =".$sid. ";";

if(mysqli_query($conn, $sql2)){
     
} 
else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}



$cid=$_GET['Course'];
for($i=0;$i<count($cid);$i++){

 $sql1 = "INSERT INTO StudentCourse VALUES ($sid,$cid[$i]);";
 $res1 = mysqli_query($conn, $sql1);
}

if(!res1){
  die('Could not insert ' . mysql_error());  
}
else{
echo "<h2 align='center'> Record Submitted</h2>";
}


?>



<div align='center'>
<form action='Student.php'>
<input type="submit" value="BACK">
</form>
</div>




