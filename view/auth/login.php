
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ingresar
  </title>
  <!-- CSS Files -->
  <link href="<?php asset("css/bootstrap.min.css")?>" rel="stylesheet" />
  <link href="<?php asset("css/now-ui-dashboard.css?v=1.1.0")?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php asset("demo/demo.css")?>" rel="stylesheet" />
</head>

<body>
  <div class="content">

    <div class="main">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <h1>Sistema de Ventas Farmacia </h1>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">

      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header">
                <h2 class="title">Ingresar</h2>
              </div>
              <div class="card-body">
                <form role="form" action="<?php url("login/ingresar")?>" method="post">
                  <input value="<?php csrf_token()?>" name="_token" type="hidden">
                  
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-lg btn-block btn-round btn-primary">Ingresar</button>
                </form>
                <br>
                <?php if(Session::has("estado") && Session::has("mensaje")){ ?>
                  <div class="alert alert-warning">
                    <button type="button" aria-hidden="true" class="close">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                    <span>
                      <b> Error! </b> <?php echo Session::get("mensaje"); ?>
                    </span>
                  </div>
                <?php } ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      
      <?php include(VISTA_RUTA."admininclude/scripts.php")?>

    </body>

</html>