<?php
include_once 'update.php';

$result = mysqli_query($conn,"SELECT * FROM student WHERE SRNO='" . $_GET['SRNO'] . "'");
$row= mysqli_fetch_array($result);
if(isset($_POST['new']) && $_POST['new']==1){
        $srno=$_POST['srno'];
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
mysqli_query($conn,"UPDATE student set Name='" . $name . "', FatherName='" . $fname . "', 
MotherName='" . $mname . "', Gender='" . $gender . "' , DOB='" . $birth . "' , Email='" . $email . "',
Class='" . $class . "', IDNo='" . $id . "', RollNo='" . $rollno . "', Branch='" . $branch . "', 
10th='" . $ssc . "', 12th='" . $hsc . "', FE_Marks='" . $fe . "', SE_Marks='" . $se . "',
Address='" . $addr . "', MobileNo='" . $mob . "'  WHERE SRNO='" . $srno . "'");
echo  "Record Modified Successfully!!";

}else{

?>
<html>
<head>
<title>Update Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<?php if(isset($submit)) { echo $submit; } ?>
<input type="hidden" name="new" value="1" />
<input name="srno" type="hidden" value="<?php echo $row['SRNO'];?>" />
Name: <br>
<input type="text" name="name"  value="<?php echo $row['Name']; ?>">
<br>
Father's Name: <br>
<input type="text" name="fname" class="txtField" value="<?php echo $row['FatherName']; ?>">
<br>
Mother's Name :<br>
<input type="text" name="mname" class="txtField" value="<?php echo $row['MotherName']; ?>">
<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['Gender']; ?>">
<br>
DOB:<br>
<input type="date" name="birth" class="txtField" value="<?php echo $row['DOB']; ?>">
<br>
Email ID:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['Email']; ?>">
<br>
Class:<br>
<input type="text" name="class" class="txtField" value="<?php echo $row['Class']; ?>">
<br>
ID No:<br>
<input type="text" name="id" class="txtField" value="<?php echo $row['IDNo']; ?>">
<br>
Roll No:<br>
<input type="text" name="rollno" class="txtField" value="<?php echo $row['RollNo']; ?>">
<br>
Branch:<br>
<input type="text" name="branch" class="txtField" value="<?php echo $row['Branch']; ?>">
<br>
10th:<br>
<input type="text" name="ssc" class="txtField" value="<?php echo $row['10th']; ?>">
<br>
12th:<br>
<input type="text" name="hsc" class="txtField" value="<?php echo $row['12th']; ?>">
<br>
FE Marks:<br>
<input type="text" name="fe" class="txtField" value="<?php echo $row['FE_Marks']; ?>">
<br>
SE Marks:<br>
<input type="text" name="se" class="txtField" value="<?php echo $row['SE_Marks']; ?>">
<br>
Address:<br>
<input type="text" name="addr" class="txtField" value="<?php echo $row['Address']; ?>">
<br>
Mobile No:<br>
<input type="text" name="mob" class="txtField" value="<?php echo $row['MobileNo']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="button">

</form>
<?php } ?><br>
<a href="view.php">Students List</a><br>
</body>
</html>