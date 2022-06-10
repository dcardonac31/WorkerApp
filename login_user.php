<?php
include_once 'conexion.php';
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;

$qry="SELECT * FROM config where Email ='$email' and Password='$password'";
$result=mysqli_query($conn,$qry);

$rows=mysqli_num_rows($result);

if($rows > 0) {
    header("location:home.php");
}else{
    echo "<script>alert('Usuario o contraseña no validos');</script>";
    header("Refresh:0; url=index.php");
}
mysqli_free_result($result);
mysqli_close($conn);
