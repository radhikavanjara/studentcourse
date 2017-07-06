<!DOCTYPE html>
<html>
<head>

<title>Delete Record</title>

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


 <div class="topnav" id="myTopnav">
  <a href="Student.php">HOME</a>
  <a href="add.php">ADD</a>
  <a href="update.php">UPDATE</a>
</div> 

</head>

<body>

<h2 align='center'> Enter Student Details to Delete Record</h2>

<div align="center">

<form action = 'deleteaction.php'>

  <b>First Name:</b><br>
  <input type='text' name='FirstName' required>
  <br>
  <b>e-mail:</b><br>
  <input type='text' name='email' required>
  <br>
  <br>
  <input type="submit" value="DELETE">
</form>

</div>

</body>
</html>

