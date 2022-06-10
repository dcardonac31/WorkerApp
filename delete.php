<?php
include_once 'conexion.php';
if (isset($_GET['idTrabajador'])) {
   $idTrabajador = mysqli_real_escape_string($conn, $_GET['idTrabajador']);
   $sql = "DELETE FROM trabajador
            WHERE Id = $idTrabajador
            ";
   echo "Sql: " . $sql;
   if (mysqli_query($conn, $sql)) {
      echo "<script>alert('Trabajador eliminado correctamente');</script>";
      header("Refresh:0; url=view_consultar.php");
   } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
   }
}
