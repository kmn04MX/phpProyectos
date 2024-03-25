<?php
session_start();
if($_POST){
    if($_POST['usuario'] == "admin" && $_POST['contrasenia'] == "sistema"){
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "Administrador";
        //Sirve para redireccionar a alguna pagina web
        header("Location:inicio.php");
    }else{
        $mensaje = "Errror: Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <!----------------------- Main Container -------------------------->
     <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #bd1e0d;">
           <div class="featured-image mb-3">
            <img src="../img/1.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Verificate</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Ingresa y genera todos los pdf que necesites para las polizas de Mawdy.</small>
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">

                        <?php if(isset($mensaje)){?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>
                <div class="header-text md-4">
                     <h2>Hola,</h2>
                     <p>Bienvenido a la aplicación polizaPDF.</p>
                </div>
                <form method="POST">
                <div class="input-group md-3">
                    <label for="exampleInputEmail1">Usuario: </label>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Escribe tu usuario" name="usuario" aria-describedby="emailHelp">
                </div>
                <div class="input-group md-1">
                <label for="exampleInputPassword1">Contrseña:</label>
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Escribe tu contraseña" name="contrasenia">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Recuerdame</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href="#" class="text-danger disabled">Forgot Password?</a></small>
                    </div> -->
                </div>
                <div class="input-group mb-4">
                    <button type="submit" class="btn btn-outline-primary w-100 fs-6">Entrar</button>
                </div>
                </form>
                <div class="input-group mb-3">
                    <!-- <button class="btn btn-lg btn-light w-100 fs-6 hidden"><img src="../img/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button> -->
                </div>
                <div class="row">
                    <!-- <small>Don't have account? <a href="#">Sign Up</a></small> -->
                </div>
          </div>
       </div> 
      </div>
    </div>
</body>
</html>