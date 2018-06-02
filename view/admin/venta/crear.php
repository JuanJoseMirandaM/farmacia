<!DOCTYPE html>
<html lang="es">

<head>

  <?php include(VISTA_RUTA."admininclude/head.php") ?>

</head>

<body>
  <div class="wrapper" ng-app="ventaApp" ng-controller="ventaController">

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
          <form action="<?php url("ventas/agregar")?>" method="POST" role="form">
            <input type="hidden" value="<?php url('')?>" id="urlPrincipal">
            <div class="col-md-6">
              <div class="card card-default">
                <div class="card-body">

                  <legend>Datos de la Venta</legend>

                  <?php if(isset($venta)){?>
                  <input  type="hidden" value="<?php echo $venta->id?>" name="venta_id">
                  <?php }?>

                  <div class="form-group">
                    <label for="nombre">Nombre del cliente</label>
                    <input value="<?php echo isset($venta) ? $venta->cliente : '' ?>"
                    required autofocus type="text" name="nombre" class="form-control" id="nombre" placeholder="Contoso Alfaro">
                  </div>

                  <div class="form-group">
                    <label for="ci">NIT/CI</label>
                    <input value="<?php echo isset($venta) ? $venta->ci:'' ?>"
                    required type="text" name="ci" class="form-control" id="ci" placeholder="0">
                  </div>

                  <?php if(isset($venta)){?>
                  <div class="form-group">
                    <label for="precio">Precio</label>
                    <input value="<?php echo isset($venta)? $venta->precio:"" ?>"
                    required type="text" class="form-control" name="precio" id="precio" placeholder="00.00">
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>

            <div class="content">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <button type="button" ng-click="cargarProductos()" data-toggle="modal" data-target="#listaProductos" class="btn btn-sm btn-primary">Agregar Producto</button>
                      <hr>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <tr>
                              <th>Codigo</th>
                              <th>Producto</th>
                              <th>Peso</th>
                              <th>Cantidad</th>
                              <th>Precio</th>
                              <th>Subtotal</th>
                              <th><i class="fa fa-cog"></i></th>
                            
                          </thead>
                          <tbody>
                            <tr ng-repeat="pd in productosAdd">
                              <td>{{ pd.cod }}</td>
                              <td>{{ pd.nombre }}</td>
                              <td>{{ pd.peso }}</td>
                              <td>{{ pd.cantidad }}</td>
                              <td>{{ pd.precio | currency:'Bs ' }}</td>
                              <td>{{ pd.subtotal | currency:'Bs ' }}</td>
                              <td>
                                <a class="text-danger" href="javascript:;" ng-click="removerProducto($index)"><i class="fa fa-times">

                                </i></a>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="5" class="text-right">Total:</th>
                              <td>{{getTotal() | currency:'Bs ' }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="hidden" name="productos" value="{{productosAdd}}">
              <input type="hidden" name="monto_total" value="{{getTotal()}}">
              <button type="submit" class="btn btn-success">Registrar Venta</button>
            </div>    
          </form>
        </div>  

        <!-- Modal -->
        <div class="modal fade" id="listaProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Listado productos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="buscar" ng-model="buscarProducto">
                        <hr>
                        <table class="table table-hover">

                          <thead>
                            <tr>
                              <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Peso</th>
                                    <th>Precio</th>
                                    <th>Accion</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr ng-repeat="product in productos | filter:buscarProducto">
                              <td>{{ product.cod }}</td>
                                    <td>{{ product.nombre }}</td>
                                    <td>{{ product.peso }}</td>
                                    <td>{{ product.precio | currency:'Bs ' }}</td>
                                    <td>
                                        <button ng-click="seleccionarProducto(product.id)" type="button" class="btn btn-sm btn-default">Agregar</button>
                                    </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
        <!--FIN CONTENIDO -->
      </div>
    </div>
    <!--   Core JS Files   -->
  </div>
  <?php include(VISTA_RUTA."admininclude/scripts.php")?>
</body>

</html>
