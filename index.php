<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang="en">

<title>Sign up WorkerApp</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
  <script src="jquery/jquery.min.js"></script>
  <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!---- boostrap.min link local ----->

  <link rel="stylesheet" href="css/style.css">
  <!---- boostrap.min link local ----->

  <script src="js/bootstrap.min.js"></script>
  <!---- Boostrap js link local ----->

  <link rel="icon" href="images/icon.png" type="image/x-icon" />
  <!---- Icon link local ----->

  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <!---- Font awesom link local ----->
</head>

<body>
  <div class="container-fluid">
    <div class="container">
      <img src="./images/workerApp_white.png" alt="logo" width="250px">
      <hr>
      <div class="row">
        <div class="col-md-5">
          <form role="form" method="post" action="insert_user.php">
            <fieldset>
              <p class="text-uppercase pull-center">Registro de nuevo usuario</p>
              <div class="form-group">
                <input type="number" name="documentId" id="documentId" class="form-control input-lg" placeholder="123456789" required>
              </div>
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Jhon Doe" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="user@mail.com" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
              </div>
            </fieldset>
          </form>
        </div>

        <div class="col-md-2">
          <!-------null------>
        </div>

        <div class="col-md-5">
        <form role="form" method="post" action="login_user.php">
            <fieldset>
              <p class="text-uppercase">Inicio de de sesión</p>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="user@mail.com" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" class="btn btn-md" value="Sign In">
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>


</html>