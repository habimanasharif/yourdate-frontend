<?php
$server ="localhost";
$db ="urdatingapp";
$user ="root";
$password ="";
$email=$_POST["email"];
$fullname=$_POST["fullname"];
$username=$_POST["username"];
$bio=$_POST["bio"];
$location=$_POST["location"];
$conn=mysqli_connect($server,$user,$password,$db);
if ($conn){
    $connected="byikoneshe";
}else{
    $connected="byanze";
}
$sql=mysqli_query($conn,"SELECT * FROM members where email='$email'");
echo mysqli_num_rows($sql);
if(mysqli_num_rows($sql)<0)
{
    echo "Email doesnt exist"; 
	exit;
}
else
{
    
 $res=mysqli_query($conn,"update members set username='$username', fullname='$fullname',location='$location', bio='$bio' where email='$email'");
 echo $email;
}

?>