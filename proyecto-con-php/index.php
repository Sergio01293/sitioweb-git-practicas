<?php include("cabecera.php");?>
<?php include("conexion.php"); ?>
<?php
    $objConexion = new conexion();
    $proyectos = $objConexion->consultar("SELECT * FROM `Productos` ");
?>
    <div class="p-5 bg-light">
        <div class="container">
            <p class="text-center h3">Bienvenidos</p>
            <p >Este es un portafolio privado</p>
            <p>Mas informacion</p>

        </div>
    </div>

    <div class="row mt-2">
        <?php foreach($proyectos as $proyecto){ ?>
            <div class="cell-md-4 mt-4">
                <div class="card image-header">
                    <div class="card-header fg-white" style="background-image: url(imagenes/<?php echo $proyecto['Imagen'];?>)">
                        
                    </div>
                    <div class="card-content p-2">
                        <p class="fg-gray"><?php echo $proyecto['Nombre'];?></p>
                        <?php echo $proyecto['Descripcion'];?>
                    </div>
                    <div class="card-footer">
                        <button class="button secondary">Ver mas</button>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php include("pie.php")?>