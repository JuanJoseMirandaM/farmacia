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
            <a class="navbar-brand"><h1>Ventas</h1></a>
          </div>
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!--Using-->
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-header">Lista de Ventas | <a href="<?php url("ventas/nuevo")?>" class="btn btn-primary btn-sm"><i class="now-ui-icons ui-1_simple-add"></i> Nueva Venta</a> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>NIT/CI</th>
                        <th>Precio</th>
                        <th>Fecha</th>
                      </thead>
                      <tbody>
                        <?php foreach ($ventas as $venta) { ?>
                        <tr>
                          <td><?php echo $venta->id ?></td>
                          <td><?php echo $venta->cliente ?></td>
                          <td><?php echo $venta->ci ?></td>
                          <td><?php echo "Bs ".number_format($venta->total,2) ?></td>
                          <td><?php echo $venta->fecha ?></td>

                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--FIN CONTENIDO -->
            
          </div>
        </div>
        <!--   Core JS Files   -->
        <?php include(VISTA_RUTA."admininclude/scripts.php")?>
        </body>

        </html>
