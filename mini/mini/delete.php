<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "mini";

$conn = mysqli_connect($host_name, $user_name, $password, $database);

if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

$result = mysqli_query($conn,"SELECT * FROM student");
?>

<html>
<head>
<title>Delete</title>
</head>
<h1>***Delete Records***</h1>
<link type="text/css" rel="stylesheet" href="style6.css"/>
<body background="https://localhost/mini/2.jpg">
<table>
	<tr>
        <th>SRNO</th>
	<th>Name</th>
	<th>FatherName</th>
	<th>MotherName</th>
        <th>Gender</th>
        <th>DOB</th>
	<th>Email</th>
        <th>Class</th>
	<th>IDNo</th>
        <th>RollNo</th> 
        <th>Branch</th>
        <th>10th</th>
        <th>12th</th>
        <th>FE_Marks</th>
        <th>SE_Marks</th>
        <th>Address</th>
        <th>MobileNo</th>
	<th>Action</th>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($studentname)) echo $studentname;?>">
	<td><?php echo $row["SRNO"]; ?></td>
        <td><?php echo $row["Name"]; ?></td>
	<td><?php echo $row["FatherName"]; ?></td>
	<td><?php echo $row["MotherName"]; ?></td>
        <td><?php echo $row["Gender"]; ?></td>
        <td><?php echo $row["DOB"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
        <td><?php echo $row["Class"]; ?></td>
	<td><?php echo $row["IDNo"]; ?></td>
        <td><?php echo $row["RollNo"]; ?></td>
        <td><?php echo $row["Branch"]; ?></td>
        <td><?php echo $row["10th"]; ?></td>
        <td><?php echo $row["12th"]; ?></td>
        <td><?php echo $row["FE_Marks"]; ?></td>
        <td><?php echo $row["SE_Marks"]; ?></td>
        <td><?php echo $row["Address"]; ?></td>
        <td><?php echo $row["MobileNo"]; ?></td>
	<td><a href="delete1.php?Name=<?php echo $row["Name"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
<p>Go to <a href="view.php">View Page</a></p>
</body>
</html>