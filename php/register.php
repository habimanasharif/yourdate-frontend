<?php
$server ="localhost";
$db ="urdatingapp";
$user ="root";
$password ="";
$email=$_POST["email"];
$pass=$_POST["password"];
$conn=mysqli_connect($server,$user,$password,$db);
if ($conn){
    $connected="byikoneshe";
}else{
    $connected="byanze";
}
$sql=mysqli_query($conn,"SELECT * FROM members where email='$emai'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else(isset($_POST['save']))
{
mysqli_query($conn,"insert into members(email,password) values('$email','$pass')")

    
}

?>