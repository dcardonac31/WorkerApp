<?php
    include_once 'conexion.php';
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

    if (isset($_GET['idServicio']))
    {
      $idServicio = mysqli_real_escape_string($conn, $_GET['idServicio']);
      $sql = "SELECT
      s.DescripcionServicio,
      t.NombrePersona,
      t.NombreEmpresa,
      t.ServicioId,
      t.DescripcionServicio,
      t.CiudadId,
      c.Ciudad,
      t.Direccion,
      t.Email,
      t.Celular,
      t.TelefonoFijo,
      t.Whatsapp,
      t.SitioWeb,
      t.Instagram,
      t.Facebook,
      t.LogoEmpresa,
      t.Imagen1,
      t.Imagen2,
      t.Imagen3,
      t.Imagen4,
      t.Imagen5,
      t.Imagen6,
      t.Imagen7,
      t.Imagen8,
      t.Imagen9,
      t.Imagen10
      FROM trabajador t
      LEFT JOIN servicio s
      ON t.ServicioId = s.Id
      LEFT JOIN ciudad c
      ON t.CiudadId = c.Ciudad
      WHERE s.Id = $idServicio;";
  
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<div class='car' style='width: 18rem;'>
            <img src=$row[LogoEmpresa] class='card-img-top' alt='Logo' height='250px' width='150px'>
            <div class='card-body'>
              <h5 class='card-title'>$row[NombrePersona]</h5>
              <h6 class='card-title'>$row[NombreEmpresa]</h6>
              <a href=$row[Whatsapp] target='_blank'>
              <img src='images/whatsapp.png' alt='Whatsapp' target='_blank' style='width:42px;height:42px;'>
              </a>
              <p class='card-text'>$row[DescripcionServicio]</p>
              <a href='#' class='btn btn-primary'>Consultar</a>
            </div>
          </div>";
          }
      } else {
          echo "0 results";
      }
    }







