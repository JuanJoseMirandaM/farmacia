<!DOCTYPE html>
<html lang="es">

<head>

  <?php include(VISTA_RUTA."admininclude/head.php") ?>

</head>

<body>
  <div class="wrapper ">
    
    <?php include(VISTA_RUTA."admininclude/menu.php") ?>
    
    <div class="main-panel">
      <!-- Navbar --><!-- Login  -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand"><h1>Principal</h1></a>
          </div>
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!--Using-->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="login.html">Salir</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
        
      </div>
      <!--INICIO CONTENIDO -->
      <dir class="col-lg">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title"> Usuarios</h4>
        </div>
        <div class="card-body">
          <a href="<?php url("usuario")?>" class="btn btn-default "><i class="now-ui-icons users_single-02"></i> Listado de usuarios</a>
        </div>
      </div>
      </dir>
      <!--FIN CONTENIDO -->
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <?php include(VISTA_RUTA."admininclude/scripts.php")?>
</body>

</html>
