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
                  <h4 class="card-header"><?php echo isset($producto)? "Actualizar":"Nuevo"?> producto | <a href="<?php url("producto")?>" class="btn btn-default btn-sm"><i class="now-ui-icons users_single-02"></i> Ver listado</a> </h4>
                </div>
                <br>
                
                <div class="col-md-6">
                  <div class="card card-default">
                    <div class="card-body">
                      <form action="<?php url("producto/agregar")?>" method="POST" role="form">
                        <legend>Datos del Producto</legend>

                        <?php if(isset($producto)){?>
                        <input  type="hidden" value="<?php echo $producto->id?>" name="producto_id">
                        <?php }?>

                        <div class="form-group">
                          <label for="codigo">Codigo</label>
                          <input value="<?php echo isset($producto)? $producto->cod:"" ?>"
                          required type="text" class="form-control" name="codigo" id="codigo" placeholder="COD-001">
                        </div>

                        <div class="form-group">
                          <label for="nombre">Nombre</label>
                          <input value="<?php echo isset($producto)? $producto->nombre:"" ?>"
                          required type="text" class="form-control" name="nombre" id="nombre" placeholder="Medicamento">
                        </div>

                        <div class="form-group">
                          <label for="peso">Dosificación [gr/ml]</label>
                          <input value="<?php echo isset($producto)? $producto->peso:"" ?>"
                          required type="text" class="form-control" name="peso" id="peso" placeholder="0.00 mg">
                        </div>

                        <div class="form-group">
                          <label for="precio">Precio</label>
                          <input value="<?php echo isset($producto)? $producto->precio:"" ?>"
                          required type="text" class="form-control" name="precio" id="precio" placeholder="00.00">
                        </div>

                        <div class="form-group">
                          <label for="cantidad">Cantidad</label>
                          <input value="<?php echo isset($producto)? $producto->cantidad:"" ?>"
                          required type="text" class="form-control" name="cantidad" id="cantidad" placeholder="0">
                        </div>

                        <button type="submit" class="btn btn-primary"><?php echo isset($producto)? "Guardar":"Registrar"?></button>
                      </form>
                    </div>
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
