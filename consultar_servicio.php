<?php

$sql = "SELECT
    s.Id,
    s.DescripcionServicio,
    s.ImagenServicio
    FROM servicio s;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<div class='car' style='width: 18rem;'>
            <div class='card-body'>
            <img src=$row[ImagenServicio] class='card-img-top' alt='Logo' height='125px' width='125px'>
            <h5 class='card-title'>$row[DescripcionServicio]</h5>
            <a href='view_consultar_trabajador_servicio.php?idServicio=$row[Id]' class='btn btn-primary'>Consultar</a>
          </div>
        </div>";
  }
} else {
  echo "0 results";
}
