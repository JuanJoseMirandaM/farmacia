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
            <a class="navbar-brand"><h1>Productos</h1></a>
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
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-header">Listado de productos | <a href="<?php url("producto/nuevo")?>" class="btn btn-primary btn-sm"><i class="now-ui-icons ui-1_simple-add"></i> Nuevo Producto</a> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Dosificación [gr/ml]</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Accion</th>
                      </thead>
                      <tbody>
                        <?php if(!empty($productos)){
                          foreach ($productos as $producto) { ?>
                          <tr>
                            <td><?php echo $producto->cod ?></td>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->peso ?></td>
                            <td><?php echo 'Bs.'.number_format($producto->precio,2) ?></td>
                            <td><?php echo $producto->cantidad ?></td>
                            <td>
                              <a class="btn btn-primary btn-sm" href="<?php url("producto/editar/".$producto->id)?>">Editar</a>
                              <button class="btn btn-danger btn-sm" onclick="confirmarProd('<?php url("producto/eliminar/".$producto->id)?>')">Eliminar</button>
                            </td>
                          </tr>
                          <?php }
                        } ?>
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
