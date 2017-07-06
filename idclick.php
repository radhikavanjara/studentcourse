<!DOCTYPE html>
<html>

<head>
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

echo "<table style='width:100%' align='center'>
<tr>
    <th style='font-size:120%'><b>Student ID</b></th>
<th style='font-size:110%'><b>First Name</b></th>
<th style='font-size:110%'><b>Last Name</b></th>
<th style='font-size:110%'><b>e-mail ID</b></th>
<th style='font-size:110%'><b>Phone Number</b></th>
<th style='font-size:110%'><b>Pincode</b></th>
  </tr>

";

$sql = "SELECT * FROM StudentInfo where Student_ID = '".$_GET['sid']."'";

$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	echo "<tr style = 'text-align:center'>";
	foreach($row as $key =>$value){
	echo "<td>" .$value. "</td>";
	}
	echo "</tr>";
    }

mysqli_close($conn);
?>

</body>
</html>
