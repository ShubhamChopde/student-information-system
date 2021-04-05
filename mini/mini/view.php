<html>
<body background="https://localhost/mini/2.jpg">
<h1>***View Records***</h1>
<link type="text/css" rel="stylesheet" href="style4.css"/>
<?php
$user_name = "root";
$password = "";
$database = "mini";
$host_name = "localhost"; 
$con1=mysqli_connect($host_name, $user_name, $password, $database);

if(isset($_POST['submit']))
{
        $name=$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
        $gender=implode(';' , (array)$_POST['gender']);
        $birth=$_POST['birth'];
        $email=$_POST['email'];
        $class=$_POST['class'];
	$id=$_POST['id'];
        $rollno=$_POST['rollno'];
        $branch=$_POST['branch'];
        $ssc=$_POST['ssc'];
        $hsc=$_POST['hsc'];
        $fe=$_POST['fe'];
        $se=$_POST['se'];
        $addr=$_POST['addr'];
        $mob=$_POST['mob'];
      	$sql = "INSERT INTO student(Name,FatherName,MotherName,Gender,DOB,Email,Class,IDNo,RollNo,Branch,10th,12th,FE_Marks,SE_Marks,Address,MobileNo) 
        VALUES('$name','$fname','$mname','$gender','$birth','$email','$class','$id','$rollno','$branch','$ssc','$hsc','$fe','$se','$addr','$mob')";

if(mysqli_query($con1, $sql)) {                               
                               echo "New record created successfully!!";                               
                             } 
else 
    {
    echo "Error: " . $sql . "<br>" . mysqli_error($con1);
    }
}

$sql = "SELECT * FROM student";
if($result = mysqli_query($con1, $sql)){
    if(mysqli_num_rows($result) > 0){
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
        while($row = mysqli_fetch_array($result)){
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
        echo "</table>";
        
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con1);
}

mysqli_close($con1);
?>


<p>Go to <a href="add.html"> Add Page</a> &nbsp;
<a href="down.html"> Home Page</a>


</body>
</html>