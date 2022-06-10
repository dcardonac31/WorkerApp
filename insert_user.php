<?php
include_once 'conexion.php';
if(isset($_POST['submit']))
{    
     $documentId = $_POST['documentId'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $isAdmin = $_POST['isAdmin'];
     $sql = "INSERT INTO config (
            DocumentId, 
            Name, 
            Email, 
            Password,
            IsAdmin) 
            VALUES (
                '$documentId',
                '$name',
                '$email',
                '$password',
                '$isAdmin'
            )";
        echo "Sql: ".$sql;
     if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Usuario insertado correctamente');</script>";
        header("Refresh:0; url=index.php");
     } else {
      echo "<script>alert('Error: ' . $sql . ':-' . mysqli_error($conn));</script>";
     }
}
