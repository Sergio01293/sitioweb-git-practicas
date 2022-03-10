<?php include('../template/cabecera.php'); ?>
<?php
if ($_POST) {
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
    $imagen = (isset($_FILES['archivo']['name'])) ? $_FILES['archivo']['name'] : "";
    $accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
}
include('../config/db.php');
switch ($accion) {
    case "registrar":
        //INSERT INTO `libros` (`Id`, `Nombre`, `Imagen`) VALUES (NULL, 'Libro de Takeyas', 'libro.jpg');
        $sql = "INSERT INTO `libros` (`Id`, `Nombre`, `Imagen`) VALUES (NULL, '$nombre', '$imagen');";
        $sentenciaSQL = $conexion->prepare($sql);
        $sentenciaSQL->execute();
        echo "Presionado boton agregar";
        break;
    case "modificar":
        echo "Presionado boton modificar";
        break;
    case "cancelar":
        echo "Presionado boton cancelar";
        break;
    case "Seleccionar":
        echo "Presionado boton ";
        break;
    case "Eliminar":
        echo "Presionado boton eliminar";
        break;
}
$sql = "SELECT * FROM libros";
$sentenciaSQL = $conexion->prepare($sql);
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="cell-5">
    <?php
    print_r($_POST);
    ?>
    <div class="card">
        <div class="card-header text-center bg-darkCyan">
            Datos del libro
        </div>
        <div class="card-content p-2">
            <form action="productos.php" data-role="validator" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Libro</label>
                    <input id="nombre" type="text" data-role="input" name="nombre" data-validate="required" placeholder="Nombre del libro">
                    <span class="invalid_feedback">
                        Introduzca el nombre del libro
                    </span>
                </div>

                <div class="form-group">
                    <label>Imagen</label>
                    <input id="archivo" type="file" data-role="file" name="archivo" data-validate="required">
                    <span class="invalid_feedback">
                        Introduzca su nombre
                    </span>
                </div>

                <div class="form-group">
                    <button value="registrar" name="accion" class="button primary">Registrar</button>
                    <button value="modificar" name="accion" class="button success">Modificar</button>
                    <button value="cancelar" name="accion" class="button alert">Cancelar</button>
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
                <th data-sortable="true">Id</th>
                <th data-sortable="true">Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaLibros as $libro) { ?>
                <tr>
                    <td><?php echo $libro['Id'] ?></td>
                    <td><?php echo $libro['Nombre'] ?></td>
                    <td><?php echo $libro['Imagen'] ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="Id" id="Id" value="<?php echo $libro['Id'] ?>">
                            <input type="submit" name="accion" value="Seleccionar" class="button primary">
                            <input type="submit" name="accion" value="Eliminar" class="button alert">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php include('../template/pie.php'); ?>