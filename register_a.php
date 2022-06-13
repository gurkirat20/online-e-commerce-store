<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else(isset($_POST['save']))
{
    
    $query="INSERT INTO register(User_Name, Password, Email,) VALUES ('$User_Name', 'md5($pass)', '$email')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header ("Location: login.php?status=success");
   
}

?>