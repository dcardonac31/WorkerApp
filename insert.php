<?php
include_once 'conexion.php';
if(isset($_POST['submit']))
{    
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
     $sql = "INSERT INTO trabajador (
            ServicioId, 
            NombrePersona, 
            NombreEmpresa, 
            DescripcionServicio, 
            CiudadId, 
            Direccion, 
            Email, 
            Celular, 
            TelefonoFijo, 
            Whatsapp, 
            SitioWeb, 
            Instagram, 
            Facebook, 
            LogoEmpresa, 
            Imagen1, 
            Imagen2, 
            Imagen3, 
            Imagen4, 
            Imagen5, 
            Imagen6, 
            Imagen7, 
            Imagen8, 
            Imagen9, 
            Imagen10) 
            VALUES (
                '$servicioId',
                '$nombrePersona',
                '$nombreEmpresa',
                '$descripcionServicio',
                '$ciudadId',
                '$direccion',
                '$email',
                '$celular',
                '$telefonoFijo',
                'https://api.whatsapp.com/send?phone='+'$whatsapp',
                '$sitioWeb',
                'https://www.instagram.com/'+'$instagram',
                'https://www.facebook.com/'+'$facebook',
                '$logoEmpresa',
                '$imagen1',
                '$imagen2', 
                '$imagen3', 
                '$imagen4', 
                '$imagen5', 
                '$imagen6', 
                '$imagen7', 
                '$imagen8', 
                '$imagen9', 
                '$imagen10'
            )";
        echo "Sql: ".$sql;
     if (mysqli_query($conn, $sql)) {
        echo "Nuevo registro ??xitoso de trabajador !";
        header("Refresh:0; url=view_insertar.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
}
?>