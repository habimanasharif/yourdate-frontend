<?php
$server ="localhost";
$db ="urdatingapp";
$user ="root";
$password ="";

$con=mysqli_connect($server,$user,$password,$db);
if ($con){
    $connected="byikoneshe";
}else{
    $connected="byanze";
}
?>