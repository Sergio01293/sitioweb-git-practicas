<?php 
    session_start();
    if($_POST){
        if(($_POST['usuario'] == "Sergio") && ($_POST['contrasena'] == "123")){
            
            $_SESSION['usuario'] = "Sergio";
            header("location:index.php");
        }else{
            echo "<script> alert('Usuario o contrasena incorrectos') </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container p-4 h-100">
        <div class="row">
            <div class="cell-4">
                
            </div>
            <div class="cell-4">
                <div class="card">
                    <div class="card-header text-center bg-darkCyan">
                        Iniciar Sesion
                    </div>
                    <div class="card-content p-2">
                        <form data-role="validator" action="login.php" method="post">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" data-role="input" name="usuario" data-validate="required" placeholder="Ingrese su usuario">
                                <span class="invalid_feedback">
                                Introduzca su nombre
                                </span>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" data-role="input" name="contrasena" data-validate="required" placeholder="***********">
                                <span class="invalid_feedback">
                                Introduzca su contrasena
                                </span>
                            </div>
                            <div class="form-group">
                                <button class="button primary">Ingresar</button>
                            </div>
            
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>
            </div>
            </div>
            <div class="cell-4">
                
            </div>
        </div>
        
    </div>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>
</html>