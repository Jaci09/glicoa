<?php

$alert = '';

if(!empty($_POST))
{
  if(empty($_POST['usuario']) || empty($_POST['contrasena']))
  {
    $alert = 'Ingrse su usuario y contraseña';
  }else{

    require_once "Conexion.php";

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE usuario= '$usuario' AND contrasena = '$contrasena'");
    $result = mysqli_num_rows($query);
    if($result > 0)
      {
        $data = mysqli_fetch_array($query);

        print_r($data);
      }
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Glico Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject 
  <link rel="shortcut icon" href="../../images/favicon.png" />-->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <center><img src="../../images/glico.png" border="1" alt="150" width="150" height="150" ></center>
              </div>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">Iniciar Sesión</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!--<div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>-->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
