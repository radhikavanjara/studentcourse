<!DOCTYPE html>
<!--Hari OM -->
<html>
<head>

<title>Course Select</title>

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



<script>
function validateForm() {
    var x = document.forms["myForm"]["Course[]"].value;
    if (x == "") {
        alert("Please Select Course");
        return false;
    }
}
</script>

 <div class="topnav" id="myTopnav">
  <a href="Student.php">HOME</a>
  <a href="delete.php">DELETE</a>
  <a href="update.php">UPDATE</a>
</div> 

</head>

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
?>

<h2 align='center'> Enter Student Details</h2>

<div align="center">

<form name="myForm" action="fsubmit.php"
onsubmit="return validateForm()">

  <b>First Name:</b><br>
  <input type='text' name='FirstName' >
  <br>
  <b>Last Name:</b><br>
  <input type='text' name='LastName' >
  <br>
  <b>e-mail ID:</b><br>
  <input type='text' name='email' >
  <br>
  <b>Phone Number:<b><br>
  <input type='text' name='PhoneNo' >
  <br>
  <b>Pincode:</b><br>
  <select name='Pincode' >


<?php
$sql = "SELECT * from address";

$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	
	echo "<option value =".$row['Pincode'].">".$row['Pincode']." - ".$row['Location']."</option>";		
	

  }
echo"</select>";
?>

<br>

  <b>Course:</b><br>
  <select name='Course[]' size=5 multiple >

<?php
$sql = "SELECT * from Course";

$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

	echo "<option value =".$row['Course_ID'].">".$row['Course_ID']." - ".$row['CourseName']."</option>";	

  }
echo"</select>";
?>

<br>
<br>
<input type="submit" name="submit" value="SUBMIT">
</form>
<form action='add.php'>
<input type="submit" value="RESET">
</form>


<?php
mysqli_close($conn);
?>

</div>
</body>
</html>
