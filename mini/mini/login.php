<html>
<body bgcolor="yellow">
<?php      
session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "mini";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "Select * from details where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful</center></h1>"; 
            header("Location:1.html"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            echo "<p class='link'>Click here to <a href='login.html'>Login</a> again.</p>";
        } 

?>    
</body>
</html>