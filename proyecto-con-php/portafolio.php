<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php
if ($_POST) {
    print_r($_POST);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    //Caso donde se tenga que insertar la misma imagen, una alternativa es colocarle la fecha para que asi se diferencien nombres
    $fecha = new DateTime();
    $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temporal = $_FILES['archivo']['tmp_name'];
    print_r($imagen_temporal);
    //NOTA: Al usar este metodo colocar toda la ruta
    move_uploaded_file($imagen_temporal, "/opt/lampp/htdocs/sitioweb-git-practicas/proyecto-con-php/imagenes/".$imagen);


    $objConexion = new conexion();
    $sql = "INSERT INTO `Productos` (`Id`, `Nombre`, `Imagen`, `Descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion'); ";
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
}
if($_GET){
    //DELETE FROM `Productos` WHERE `Productos`.`Id` = 2
    $Id = $_GET['borrar'];  
    $objConexion = new conexion();

    //Tambien se debe de borrar la imagen de nuestros archivos
    //Obtenemos primero el nombre la imagen de la base de datos
    $imagen = $objConexion->consultar("SELECT Imagen FROM `Productos` WHERE Id=".$Id);
    //print_r($imagen);
    print_r($imagen[0]['Imagen']);
    //Una vez teniendo el nombre lo eliminamos con unlink
    unlink("/opt/lampp/htdocs/sitioweb-git-practicas/proyecto-con-php/imagenes/".$imagen[0]['Imagen']);
    
    
    $sql = "DELETE FROM `Productos` WHERE `Productos`.`Id`= ".$Id;
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `Productos` ");
// print_r($proyectos);


?>

    <div class="row">
        <div class="cell-5">
            <div class="card">
                <div class="card-header bg-darkCyan">
                    Datos del proyecto
                </div>
                <div class="card-content p-2">
                    <form data-role="validator" action="portafolio.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" data-role="input" name="nombre" data-validate="required" placeholder="Nombre del archivo">
                            <span class="invalid_feedback">
                                Introduzca su nombre
                            </span>
                        </div>

                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" data-role="file" name="archivo" data-validate="required">
                            <span class="invalid_feedback">
                                Introduzca su nombre
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea data-role="textarea" data-validate="required" name="descripcion"></textarea>
                            <span class="invalid_feedback">
                                Se debe anadir una descripcion del proyecto
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <button class="button primary">Registrar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
        <div class="cell-7">
            <table class="table compact" data-rows="5" data-role="table">
                <thead>
                    <tr>
                        <th data-sortable="true">ID</th>
                        <th data-sortable="true">Nombre</th>
                        <th data-sortable="true">Imagen</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($proyectos as $proyecto){?>
                            <tr>
                                <td><?php echo $proyecto['Id'];?></td>
                                <td><?php echo $proyecto['Nombre'];?></td>
                                <td>
                                    <img width="100" src="imagenes/<?php echo $proyecto['Imagen'];?>" alt="">
                                </td>
                                <td><?php echo $proyecto['Descripcion'];?></td>
                                <td><a class="button alert" href="?borrar=<?php echo $proyecto['Id'];?>" role="button">Eliminar</a></td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>



<?php include("pie.php"); ?>