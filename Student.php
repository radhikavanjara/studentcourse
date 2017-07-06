<!DOCTYPE html>
<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="Studentjq.min.js"></script>

<title>Student Info</title>

<style>
body {background-color: #fff2e6;}
input[type=submit]{
    background-color: #00264d;
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;    
    font-size: 20px;}
h2 {
    color: #00264d;
}




/* Add a black background color to the top navigation */
.topnav {
    background-color: #00264d;
    overflow: hidden;
}


/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #fff2e6;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #004080;
    color:#fff2e6 ;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #004080;
    color: white;
}



</style>

 <div class="topnav" id="myTopnav">
  <a href="Student.php">HOME</a>
  <a href="add.php">ADD</a>
  <a href="delete.php">DELETE</a>
  <a href="update.php">UPDATE</a>
</div> 


</head>

<h2 align='center'> Student Information</h2>

<body>

<?php
$servername = "radhika.com";
$username = "root";
$password = "gurudev1995";
$dbname = "Student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<div id='StudTB'>
<table style='width:60%' align='center'>
<tr>
    <th style='font-size:120%'><b>Student ID</b></th>
<th style='font-size:120%'><b>First Name</b></th>
<th style='font-size:120%'><b>Last Name</b></th>
  </tr>

";

$sql = "SELECT Student_ID, FirstName, LastName FROM StudentInfo";

$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	echo "<tr style = 'text-align:center'>";
	//foreach($row as $key =>$value){
	//echo "<td>" .$value. "</td>";
	//}
	echo "<td><a href='idclick.php?sid=".$row['Student_ID']."'>" . $row['Student_ID'] . "</a></td>";
	echo "<td>" . $row['FirstName'] . "</td>";
	echo "<td>" . $row['LastName'] . "</td>";
	echo "</tr>";
    }
echo "</div>";
mysqli_close($conn);
?>

</body>
</html>
