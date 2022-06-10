<?php
    include_once 'conexion.php';
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

    if (isset($_GET['idTrabajador']))
    {
      $idTrabajador = mysqli_real_escape_string($conn, $_GET['idTrabajador']);
      $sql = "SELECT
      s.DescripcionServicio,
      t.NombrePersona,
      t.NombreEmpresa,
      t.DescripcionServicio,
      c.Ciudad,
      t.Direccion,
      t.Email,
      t.Celular,
      t.TelefonoFijo,
      t.Whatsapp,
      t.SitioWeb,
      t.Instagram,
      t.Facebook,
      t.LogoEmpresa
      FROM trabajador t
      LEFT JOIN servicio s
      ON t.ServicioId = s.Id
      LEFT JOIN ciudad c
      ON t.CiudadId = c.Ciudad
      WHERE t.Id = $idTrabajador;";
  
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
              <h6 class='card-title'>$row[Ciudad]</h6>
              <h6 class='card-title'>$row[TelefonoFijo]</h6>
            </div>
          </div>";
          }
      } else {
          echo "0 results";
      }
    }
  ?>
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
        if (isset($_GET['idTrabajador']))
        {
          $idTrabajador = mysqli_real_escape_string($conn, $_GET['idTrabajador']);
          $sql = "SELECT t.Imagen1 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen1 IS NOT NULL
          UNION ALL
          SELECT t.Imagen2 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen2 IS NOT NULL
          UNION ALL
          SELECT t.Imagen3 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen3 IS NOT NULL
          UNION ALL
          SELECT t.Imagen4 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen4 IS NOT NULL
          UNION ALL
          SELECT t.Imagen5 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen5 IS NOT NULL
          UNION ALL
          SELECT t.Imagen6 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen6 IS NOT NULL
          UNION ALL
          SELECT t.Imagen7 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen7 IS NOT NULL
          UNION ALL
          SELECT t.Imagen8 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen8 IS NOT NULL
          UNION ALL
          SELECT t.Imagen9 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen9 IS NOT NULL
          UNION ALL
          SELECT t.Imagen10 as ImageUrl
          FROM trabajador t
          WHERE t.Id = $idTrabajador AND t.Imagen10 IS NOT NULL;";
      
          $picture = mysqli_query($conn, $sql);
          $image=mysqli_fetch_array($picture);
          echo '<div class="carousel-item active">
          <img src="'.$image["ImageUrl"].'" class="d-block w-100" alt="..." height="500px" width="250px">
        </div>';
        while($pictures=mysqli_fetch_array($picture)){
          if($pictures["ImageUrl"] != ""){
            echo '<div class="carousel-item">
            <img src="'.$pictures["ImageUrl"].'" class="d-block w-100" alt="..." height="500px" width="250px">
          </div>';            
          }
        }
        }
        ?>
  </div>
  <a class="left carousel-control" href="#carouselExampleControls" data-slide="prev" onclick="$('#carouselExampleControls').carousel('prev')">‹</a>
<a class="right carousel-control" href="#carouselExampleControls" data-slide="next" onclick="$('#carouselExampleControls').carousel('next')">›</a>
</div>









