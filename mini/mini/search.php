<html>
<body background="https://localhost/mini/2.jpg">
<h1>***Search Records***</h1>
<link type="text/css" rel="stylesheet" href="style4.css"/>
<?php

$search = $_POST['search'];

$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "mini";

$conn = mysqli_connect($host_name, $user_name, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM student where name like '%$search%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
     echo "<table>";
            echo "<tr>";
                echo "<th>SRNO</th>";
                echo "<th>Name</th>";
                echo "<th>FatherName</th>";
                echo "<th>MotherName</th>";
                echo "<th>Gender</th>";
                echo "<th>DOB</th>";
                echo "<th>Email</th>";
                echo "<th>Class</th>";
                echo "<th>IDNo</th>";
                echo "<th>RollNo</th>";
                echo "<th>Branch</th>";
                echo "<th>10th</th>";
                echo "<th>12th</th>";
                echo "<th>FE_Marks</th>";
                echo "<th>SE_Marks</th>";
                echo "<th>Address</th>";
                echo "<th>MobileNo</th>";
            echo "</tr>";

  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
                echo "<td>" . $row['SRNO'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['FatherName'] . "</td>";
                echo "<td>" . $row['MotherName'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "<td>" . $row['DOB'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Class'] . "</td>";
                echo "<td>" . $row['IDNo'] . "</td>";
                echo "<td>" . $row['RollNo'] . "</td>";
                echo "<td>" . $row['Branch'] . "</td>";
                echo "<td>" . $row['10th'] . "</td>";
                echo "<td>" . $row['12th'] . "</td>";
                echo "<td>" . $row['FE_Marks'] . "</td>";
                echo "<td>" . $row['SE_Marks'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['MobileNo'] . "</td>";              
            echo "</tr>";
          
  }
} else {
  echo "NO SUCH RESULTS";
}
echo "</table>";
mysqli_close($conn);
?>
<p>Go back to <a href="search.html"> Search Page </a> &nbsp;
<a href="down.html"> Home Page </a>

</body>
</html>