<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    
    <style>
        body {
            margin: 0;
        }
        /* basic menu styles */
.block-menu {
    padding: 10px;
    margin: 0;
	display: block;
	background: #000;
    text-align: center;
    overflow: hidden;
position: fixed;
  top: 0;
  width: 100%;
}

.block-menu li {
	display: inline-block;
}

.block-menu li a {
	color: #fff;
	display: block;
	text-decoration: none;
	font-family: 'Passion One', Arial, sans-serif;
	font-smoothing: antialiased;
	text-transform: uppercase;
	overflow: visible;
	line-height: 20px;
	font-size: 24px;
	padding: 15px 10px;
}

/* animation domination */
.three-d {
	perspective: 200px;
	transition: all .07s linear;
	position: relative;
	cursor: pointer;
}
	/* complete the animation! */
	.three-d:hover .three-d-box, 
	.three-d:focus .three-d-box {
		transform: translateZ(-25px) rotateX(90deg);
	}

.three-d-box {
	transition: all .3s ease-out;
	transform: translatez(-25px);
	transform-style: preserve-3d;
	pointer-events: none;
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	height: 100%;
}

/* 
	put the "front" and "back" elements into place with CSS transforms, 
	specifically translation and translatez
*/
.front {
	transform: rotatex(0deg) translatez(25px);
}

.back {
	transform: rotatex(-90deg) translatez(25px);
	color: #ffe7c4;
}

.front, .back {
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: black;
	padding: 15px 10px;
	color: white;
	pointer-events: none;
	box-sizing: border-box;
}
/*Forms*/
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.bgofform {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding-top: 50px;
    padding-left: 100PX;
    padding-right: 100PX;
    padding-bottom: 50px;
    height: auto; 
    
}
/*Table design*/
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
    text-align: center;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
    
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
.bg {
  /* The image used */
  background-image: url(https://www.hull.ac.uk/choose-hull/study-at-hull/visit-us/site-elements/img/campus-aerial-from-cottingham-road.jpg);

  /* Full height */
  height: auto; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    padding-top: 100px;
    padding-left: 400PX;
    padding-right: 400PX;
    padding-bottom: 200px;
}
p
        {
            font-size:20px;
        }
         h1{
            text-align: center;
        }
        
        
        

	</style>
</head>
<body>
    <script>
        

    </script>
<ul class="block-menu">
	<li><a href="index.php" class="three-d">
		Home
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Home</span>
			<span class="back">Home</span>
		</span>
	</a></li>
	<li><a href="location.php" class="three-d">
		Add Student
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Add Student</span>
			<span class="back">Add Student</span>
		</span>
	</a></li>
	<li><a href="edit.php" class="three-d">
		Edit Data
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Edit Data</span>
			<span class="back">Edit Data</span>
		</span>
	</a></li>
    <li><a href="getdata.php" class="three-d">
		Search
		<span aria-hidden="true" class="three-d-box">
			<span class="front">Search</span>
			<span class="back">Search</span>
		</span>
	</a></li>
</ul>
<div class="bg">
    <div class="bgofform">

<h1>Edit Student's location or delete the student</h1>

	<form name="EditLoc" action="edit.php"  method="post">

		<p>Student ID: <input type="number" name="StudentID" maxlength="6" pattern="[-+]?[0-9]" required/></p>
		<p><label for="Location">Location</label>
			<select id="Location" name="Location">
				<option value="Hardy">Hardy</option>
				<option value="Fenner">Fenner</option>
				<option value="Wilberforce">Wilberforce</option>
				<option value="Larkin">Larkin</option>
				<option value="Library">Library</option>
			</select>
        </p>

		<p>Action:<br/>
		<input type="radio" name="action" value="delete">Delete(Student ID required)</input><br/>
		<input type="radio" name="action" value="update" checked>Update (Student ID required)</input>
		</p>

		<p><input type="submit" value="Send"></input></p>
	</form>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $server = 'sql.rde.hull.ac.uk';
	$connectionInfo = array( "Database"=>"rde_580275");
	$link = sqlsrv_connect($server,$connectionInfo);

	$getmaxQuery='select max(ID) as maxId from Student_Location';
	$query = sqlsrv_query( $link, $getmaxQuery);
	$row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
	$maxId = $row['maxId'];

	date_default_timezone_set("Europe/London");
	$dateTime= date('Y-m-d H:i:s');
	
	switch($_POST['action'])
	{

		case 'delete':
			$delete_query = "delete from Student_Location where StudentID=?";
			$params = array($_POST['StudentID']);
			$result = sqlsrv_query($link,$delete_query,$params);
			break;
		case 'update':
			$update_query = "update Student_Location set Location=?, Date=? where StudentID=?";
			$params = array($_POST['Location'],$dateTime,$_POST['StudentID']);
			$result = sqlsrv_query($link,$update_query,$params);
			break;
	};
	};
	
?> 

<h1>Edit student's details</h1>
<p><b>Note:</b> Student ID is required for student's details update </p>

	<form name="AddForm" action="edit.php"  method="post">

		<p>Student ID: <input type="number" name="StudentID" maxlength="6" pattern="[-+]?[0-9]" required/></p>
		<p>First Name: <input type="text" name="UserName" minlength="3"  maxlength="50" required/></p>
		<p>Surname: <input type="text" name="UserSurname" minlength="3"  maxlength="50" required/></p>


		<p><input type="submit" name="update" value="Update"></input></p>
	</form>

	<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $server = 'sql.rde.hull.ac.uk';
	$connectionInfo = array( "Database"=>"rde_580275");
	$link = sqlsrv_connect($server,$connectionInfo);

	
		if (isset($_POST['update'])) 
		{
			$update_query = "update Student_Location set UserName=?, UserSurname=? where StudentID=?";
			$params = array($_POST['UserName'],$_POST['UserSurname'],$_POST['StudentID']);
			$result = sqlsrv_query($link,$update_query,$params);
		}
	};
	
?> 

<h1>Student's Locations</h1>
<?php 
	$server = 'sql.rde.hull.ac.uk';
	$connectionInfo = array( "Database"=>"rde_580275");

	$link = sqlsrv_connect($server,$connectionInfo);

	$describeQuery='select ID, StudentID, UserName, UserSurname, Location, Date from Student_Location';
	$query = sqlsrv_query( $link, $describeQuery);

	echo '<table id="customers">';
echo '<tr><th>ID</th><th>Student ID</th><th>First Name</th><th>Surname</th><th>Location</th><th>Date</th></tr>';

while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) 
{
echo '<tr>';
echo '<td>' . $row['ID'] . '</td>'; 
echo '<td>' . $row['StudentID'] . '</td>'; 
echo '<td>' . $row['UserName'] . '</td>'; 
echo '<td>' . $row['UserSurname'] . '</td>'; 
echo '<td>' . $row['Location'] . '</td>';
echo '<td>' . $row['Date']-> format('Y-m-d H:i:s'); '</td>'; 
echo '</tr>';
} 

	echo '</table>';
	
	sqlsrv_free_stmt( $query);
?>

</div>
</div>


</body>
</html>