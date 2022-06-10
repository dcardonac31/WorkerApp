<?php
    include_once 'conexion.php';
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

    if (isset($_GET['idTrabajador']))
    {
      $idTrabajador = mysqli_real_escape_string($conn, $_GET['idTrabajador']);
      $sql = "SELECT
      t.Id,
      t.DescripcionServicio,
      t.NombrePersona,
      t.NombreEmpresa,
      t.ServicioId,
      s.DescripcionServicio AS NombreServicio,
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
      ON t.CiudadId = c.Id
      WHERE t.Id = $idTrabajador;";
  
      $result = $conn->query($sql);
      $row= mysqli_fetch_array($result);
    }
      ?>
<form action="update.php" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="servicioId">Servicios</label>
        </div>
        <select class="custom-select" id="servicioId" name="servicioId">
            <option value="0">Seleccione servicio:</option>
            <option value=<?php echo $row['ServicioId']; ?> selected><?php echo $row['NombreServicio']; ?></option>
            <?php
            $query = $conn->query("SELECT * FROM servicio");
            while ($valores = mysqli_fetch_array($query)) {
                echo "'<option value=$valores[Id]>$valores[DescripcionServicio]</option>'";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="idTrabajador">Id Trabajador</label>
        <input type="text" class="form-control" id="idTrabajador" name="idTrabajador" placeholder="Id Trabajador" value="<?php echo $row['Id']; ?>">
    </div>
    <div class="form-group">
        <label for="nombrePersona">Nombre persona</label>
        <input type="text" class="form-control" id="nombrePersona" name="nombrePersona" placeholder="Nombre persona" value="<?php echo $row['NombrePersona']; ?>">
    </div>
    <div class="form-group">
        <label for="nombreEmpresa">Nombre empresa</label>
        <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre empresa" value="<?php echo $row['NombreEmpresa']; ?>">
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Descripción servicio</span>
        </div>
        <textarea class="form-control" id="descripcionServicio" name="descripcionServicio" aria-label="With textarea"><?php echo htmlspecialchars($row['DescripcionServicio']); ?></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="ciudadId">Ciudad</label>
        </div>
        <select class="custom-select" id="ciudadId" name="ciudadId">
            <option value="0">Seleccione ciudad:</option>
            <option value=<?php echo $row['CiudadId']; ?> selected><?php echo $row['Ciudad']; ?></option>
            <?php
            $query = $conn->query("SELECT * FROM ciudad");
            while ($valores = mysqli_fetch_array($query)) {
                echo "'<option value=$valores[Id]>$valores[Ciudad]</option>'";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $row['Direccion']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" value="<?php echo $row['Email']; ?>">
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="+571234357890" value="<?php echo $row['Celular']; ?>">
    </div>
    <div class="form-group">
        <label for="telefonoFijo">Telefono Fijo</label>
        <input type="text" class="form-control" id="telefonoFijo" name="telefonoFijo" placeholder="6041234567" value="<?php echo $row['TelefonoFijo']; ?>">
    </div>
    <div class="form-group">
        <label for="whatsapp">Whatsapp</label>
        <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="571234357890" value="<?php echo $row['Whatsapp']; ?>">
    </div>
    <div class="form-group">
        <label for="sitioWeb">Sitio web</label>
        <input type="text" class="form-control" id="sitioWeb" name="sitioWeb" placeholder="www.misitio.com" value="<?php echo $row['SitioWeb']; ?>">
    </div>
    <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="mi.usuario.instagram" value="<?php echo $row['Instagram']; ?>">
    </div>
    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="mi.usuario.facebook" value="<?php echo $row['Facebook']; ?>">
    </div>
    <div class="form-group">
        <label for="logoEmpresa">LogoEmpresa</label>
        <input type="text" class="form-control" id="logoEmpresa" name="logoEmpresa" placeholder="Ingresa la url de logo de la empresa" value="<?php echo $row['LogoEmpresa']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen1">Imagen 1</label>
        <input type="text" class="form-control" id="imagen1" name="imagen1" placeholder="Ingresa la url de la imagen 1" value="<?php echo $row['Imagen1']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen1">Imagen 2</label>
        <input type="text" class="form-control" id="imagen2" name="imagen2" placeholder="Ingresa la url de la imagen 2" value="<?php echo $row['Imagen2']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen2">Imagen 3</label>
        <input type="text" class="form-control" id="imagen3" name="imagen3" placeholder="Ingresa la url de la imagen 3" value="<?php echo $row['Imagen3']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen2">Imagen 4</label>
        <input type="text" class="form-control" id="imagen4" name="imagen4" placeholder="Ingresa la url de la imagen 4" value="<?php echo $row['Imagen4']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen2">Imagen 5</label>
        <input type="text" class="form-control" id="imagen5" name="imagen5" placeholder="Ingresa la url de la imagen 5" value="<?php echo $row['Imagen5']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen3">Imagen 6</label>
        <input type="text" class="form-control" id="imagen6" name="imagen6" placeholder="Ingresa la url de la imagen 6" value="<?php echo $row['Imagen6']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen4">Imagen 7</label>
        <input type="text" class="form-control" id="imagen7" name="imagen7" placeholder="Ingresa la url de la imagen 7" value="<?php echo $row['Imagen7']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen5">Imagen 8</label>
        <input type="text" class="form-control" id="imagen8" name="imagen8" placeholder="Ingresa la url de la imagen 8" value="<?php echo $row['Imagen8']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen6">Imagen 9</label>
        <input type="text" class="form-control" id="imagen9" name="imagen9" placeholder="Ingresa la url de la imagen 9" value="<?php echo $row['Imagen9']; ?>">
    </div>
    <div class="form-group">
        <label for="imagen6">Imagen 10</label>
        <input type="text" class="form-control" id="imagen10" name="imagen10" placeholder="Ingresa la url de la imagen 10" value="<?php echo $row['Imagen10']; ?>">
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Actualizar">
</form>