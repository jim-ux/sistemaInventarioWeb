<div id="bak"></div>
<br><br><br><br><br>
<div class="container mt-5">
<div class="row">
      <div class="col-md-7">
        

        <div class="login-logo">

        <img src="vistas/img/plantilla/tienda.png" class="img-responsive">

        </div>


      </div>
      <div class="col-md-5">
      
        <div class="container-fluid bg-success padding-bottom-5">
            <form method="post">

            <h3 class="">Ingreso de Usuario</h3>

            <div class="form-group has-feedback">

              <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>

            </div>

            <div class="form-group has-feedback">

              <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>

            <div class="row">

              <div class="col-xs-4">

                <button type="submit" class="btn btn-success btn-block btn-flat">Ingresar</button>
                
              
              </div>

            </div>


            </div>

            <?php
              
              $login = new ControladorUsuarios();
              $login -> ctrIngresoUsuario();
              
            ?>

            </form>
        </div>
      </div>
</div> 



    

    

  


