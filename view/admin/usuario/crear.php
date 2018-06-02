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
            <a class="navbar-brand"><h1>Usuarios</h1></a>
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
                <h4 class="card-header"><?php echo isset($usuario)? "Actualizar":"Nuevo"?> usuario | <a href="<?php url("usuario")?>" class="btn btn-default btn-sm"><i class="now-ui-icons users_single-02"></i> Ver listado</a> </h4>
              </div>
              <br>
              <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-body">
                        <form action="<?php url("usuario/agregar")?>" method="POST" role="form">
                            <legend>Datos del Usuario</legend>

                            <?php if(isset($usuario)){?>
                                <input  type="hidden" value="<?php echo $usuario->id?>" name="usuario_id">  <!--video 35 12:30 -->
                            <?php }?>

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input value="<?php echo isset($usuario)? $usuario->nombre:"" ?>"
                                       required autofocus type="text" class="form-control" name="nombre" id="nombre" placeholder="Example">
                            </div>


                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input value="<?php echo isset($usuario)? $usuario->usuario:"" ?>"
                                        required  type="text" class="form-control" name="usuario" id="usuario" placeholder="example">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input  <?php echo isset($usuario)? "": "required"?>  type="password" class="form-control" name="password" id="pwd" placeholder="********">
                            </div>

                            <div class="form-group">
                                <label for="usuario">Categoria</label>
                                <select name="privilegio" id="privilegio" class="form-control" required="required">
                                  <option <?php echo isset($usuario) && $usuario->privilegio == "admin" ? 'selected':'' ?>
                                            value="admin">Administrador</option>
                                    <option <?php echo isset($usuario) && $usuario->privilegio == "venta" ? 'selected':'' ?>
                                            value="venta">Vendedor</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo isset($usuario)? "Guardar":"Registrar"?></button>
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
