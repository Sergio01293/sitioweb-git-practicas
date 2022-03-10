<?php
    if($_POST){
        header('Location:inicio.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <title>Administrador del sitio web</title>
</head>

<body>
<div class="container p-4 h-100">
        <div class="row">
            <div class="cell-4">
                
            </div>
            <div class="cell-4">
                <div class="card">
                    <div class="card-header text-center bg-darkCyan">
                        Login
                    </div>
                    <div class="card-content p-2">
                        <form data-role="validator" action="inicio.php" method="post">
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