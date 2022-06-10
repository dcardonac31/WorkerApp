<form action="insert.php" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="servicioId">Servicios</label>
        </div>
        <select class="custom-select" id="servicioId" name="servicioId">
        <option value="0">Seleccione servicio:</option>
        <?php
          $query = $conn -> query ("SELECT * FROM servicio");
          while ($valores = mysqli_fetch_array($query)) {
            echo "'<option value=$valores[Id]>$valores[DescripcionServicio]</option>'";
          }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nombrePersona">Nombre persona</label>
        <input type="text" class="form-control" id="nombrePersona" name="nombrePersona" placeholder="Nombre persona">
    </div>
    <div class="form-group">
        <label for="nombreEmpresa">Nombre empresa</label>
        <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" placeholder="Nombre empresa">
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Descripción servicio</span>
        </div>
        <textarea class="form-control" id="descripcionServicio" name="descripcionServicio" aria-label="With textarea"></textarea>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="ciudadId">Ciudad</label>
        </div>
        <select class="custom-select" id="ciudadId" name="ciudadId">
        <option value="0">Seleccione ciudad:</option>
        <?php
          $query = $conn -> query ("SELECT * FROM ciudad");
          while ($valores = mysqli_fetch_array($query)) {
            echo "'<option value=$valores[Id]>$valores[Ciudad]</option>'";
          }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
    </div>
    <div class="form-group">
        <label for="celular">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="+571234357890">
    </div>
    <div class="form-group">
        <label for="telefonoFijo">Telefono Fijo</label>
        <input type="text" class="form-control" id="telefonoFijo" name="telefonoFijo" placeholder="6041234567">
    </div>
    <div class="form-group">
        <label for="whatsapp">Whatsapp</label>
        <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="571234357890">
    </div>
    <div class="form-group">
        <label for="sitioWeb">Sitio web</label>
        <input type="text" class="form-control" id="sitioWeb" name="sitioWeb" placeholder="www.misitio.com">
    </div>
    <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="mi.usuario.instagram">
    </div>
    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="mi.usuario.facebook">
    </div>
    <div class="form-group">
        <label for="logoEmpresa">LogoEmpresa</label>
        <input type="text" class="form-control" id="logoEmpresa" name="logoEmpresa" placeholder="Ingresa la url de logo de la empresa">
    </div>
    <div class="form-group">
        <label for="imagen1">Imagen 1</label>
        <input type="text" class="form-control" id="imagen1" name="imagen1" name="imagen1" placeholder="Ingresa la url de la imagen 1">
    </div>
    <div class="form-group">
        <label for="imagen1">Imagen 2</label>
        <input type="text" class="form-control" id="imagen2" name="imagen2" placeholder="Ingresa la url de la imagen 1">
    </div>
    <div class="form-group">
        <label for="imagen2">Imagen 3</label>
        <input type="text" class="form-control" id="imagen3" name="imagen3" placeholder="Ingresa la url de la imagen 2">
    </div>
    <div class="form-group">
        <label for="imagen2">Imagen 4</label>
        <input type="text" class="form-control" id="imagen4" name="imagen4" placeholder="Ingresa la url de la imagen 2">
    </div>
    <div class="form-group">
        <label for="imagen2">Imagen 5</label>
        <input type="text" class="form-control" id="imagen5" name="imagen5" placeholder="Ingresa la url de la imagen 2">
    </div>
    <div class="form-group">
        <label for="imagen3">Imagen 6</label>
        <input type="text" class="form-control" id="imagen6" name="imagen6" placeholder="Ingresa la url de la imagen 3">
    </div>
    <div class="form-group">
        <label for="imagen4">Imagen 7</label>
        <input type="text" class="form-control" id="imagen7" name="imagen7" placeholder="Ingresa la url de la imagen 4">
    </div>
    <div class="form-group">
        <label for="imagen5">Imagen 8</label>
        <input type="text" class="form-control" id="imagen8" name="imagen8" placeholder="Ingresa la url de la imagen 5">
    </div>
    <div class="form-group">
        <label for="imagen6">Imagen 9</label>
        <input type="text" class="form-control" id="imagen9" name="imagen9" placeholder="Ingresa la url de la imagen 6">
    </div>
    <div class="form-group">
        <label for="imagen6">Imagen 10</label>
        <input type="text" class="form-control" id="imagen10" name="imagen10" placeholder="Ingresa la url de la imagen 6">
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>