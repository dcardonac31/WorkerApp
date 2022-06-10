<?php
include_once 'conexion.php';
if(isset($_POST['submit']))
{    $idTrabajador = $_POST['idTrabajador'];
     $servicioId = $_POST['servicioId'];
     $nombrePersona = $_POST['nombrePersona'];
     $nombreEmpresa = $_POST['nombreEmpresa'];
     $descripcionServicio = $_POST['descripcionServicio'];
     $ciudadId = $_POST['ciudadId'];
     $direccion = $_POST['direccion'];
     $email = $_POST['email'];
     $celular = $_POST['celular'];
     $telefonoFijo = $_POST['telefonoFijo'];
     $whatsapp = $_POST['whatsapp'];
     $sitioWeb = $_POST['sitioWeb'];
     $instagram = $_POST['instagram'];
     $facebook = $_POST['facebook'];
     $logoEmpresa = $_POST['logoEmpresa'];
     $imagen1 = $_POST['imagen1'];
     $imagen2 = $_POST['imagen2']; 
     $imagen3 = $_POST['imagen3']; 
     $imagen4 = $_POST['imagen4']; 
     $imagen5 = $_POST['imagen5']; 
     $imagen6 = $_POST['imagen6']; 
     $imagen7 = $_POST['imagen7']; 
     $imagen8 = $_POST['imagen8']; 
     $imagen9 = $_POST['imagen9']; 
     $imagen10 = $_POST['imagen10'];
     $sql = "UPDATE trabajador
             SET 
            ServicioId = '$servicioId', 
            NombrePersona = '$nombrePersona', 
            NombreEmpresa = '$nombreEmpresa', 
            DescripcionServicio = '$descripcionServicio', 
            CiudadId = '$ciudadId', 
            Direccion = '$direccion', 
            Email = '$email', 
            Celular = '$celular', 
            TelefonoFijo = '$telefonoFijo', 
            Whatsapp = '$whatsapp', 
            SitioWeb = '$sitioWeb', 
            Instagram = '$instagram', 
            Facebook = '$facebook', 
            LogoEmpresa = '$logoEmpresa', 
            Imagen1 = '$imagen1', 
            Imagen2 = '$imagen2', 
            Imagen3 = '$imagen3', 
            Imagen4 = '$imagen4', 
            Imagen5 = '$imagen5', 
            Imagen6 = '$imagen6', 
            Imagen7 = '$imagen7', 
            Imagen8 = '$imagen8', 
            Imagen9 = '$imagen9', 
            Imagen10 = '$imagen10'
            WHERE Id = $idTrabajador
            ";
        echo "Sql: ".$sql;
     if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Trabajador actualizado correctamente');</script>";
        header("Refresh:0; url=view_update.php?idTrabajador=$idTrabajador");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
}
?>