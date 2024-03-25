<?php
include('../template/cabecera.php');
?>

<?php
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImagen = (isset($_FILES['txtImagen']['name'])) ? $_FILES['txtImagen'][ 'name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

include('../confg/database.php');

switch ($accion) {
    case 'Agregar':
        $sentencia= $conexion->prepare("INSERT INTO libros (id, nombre, imagen) VALUES (NULL, :nombre, :imagen);");
        $sentencia->bindParam(':nombre', $txtNombre);
        
        $fecha = new DateTime();
        $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
        if($tmpImagen != ""){
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);
        }

        $sentencia->bindParam(':imagen', $nombreArchivo);
        $sentencia->execute();
        header('Location:productos.php');
        exit();
        
        break;
    case 'Modificar':
        $sentencia= $conexion->prepare("UPDATE libros SET nombre=:nombre WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->bindParam(':nombre', $txtNombre);
        $sentencia->execute();
        if($txtImagen != ""){


            $fecha = new DateTime();
            $nombreArchivo = ($txtImagen != "") ? $fecha->getTimestamp() . "_" . $_FILES["txtImagen"]["name"] : "imagen.jpg";
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];  
            move_uploaded_file($tmpImagen, "../../img/" . $nombreArchivo);

            $sentencia= $conexion->prepare("SELECT * FROM libros WHERE id=:id");
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $libro = $sentencia->fetch(PDO::FETCH_LAZY);

            if(isset($libro['imagen']) && ($libro['imagen'] != "imagen.jpg")){
                if(file_exists("../../img/" . $libro['imagen'])){
                    unlink("../../img/" . $libro['imagen']);
                }
            }

            $sentencia= $conexion->prepare("UPDATE libros SET imagen=:imagen WHERE id=:id");
            $sentencia->bindParam(':id', $txtID);
            $sentencia->bindParam(':imagen', $nombreArchivo);
            $sentencia->execute();
        }


        break;
    case 'Cancelar':
        header('Location:productos.php');
        break;
    case 'Seleccionar':
        $sentencia= $conexion->prepare("SELECT * FROM libros WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        $libro = $sentencia->fetch(PDO::FETCH_LAZY);
        $txtNombre = $libro['nombre'];
        $txtImagen = $libro['imagen'];
        $txtID = $libro['id'];
        break;
    case 'Borrar':
        $sentencia= $conexion->prepare("SELECT * FROM libros WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        $libro = $sentencia->fetch(PDO::FETCH_LAZY);

        if(isset($libro['imagen']) && ($libro['imagen'] != "imagen.jpg")){
            if(file_exists("../../img/" . $libro['imagen'])){
                unlink("../../img/" . $libro['imagen']);
            }
        }

        $sentencia= $conexion->prepare("DELETE FROM libros WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();

        break;
    
}

$sentencia = $conexion->prepare("SELECT * FROM libros");
$sentencia->execute();
$listaLibros = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="col-md-3">
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            Línea de captura | Ficha pesos
            
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="./fichapesospdf.php">
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Tipo de pago: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Clave de agente: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" disabled>
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">No de póliza:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Fecha limite de pago recibo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Importe a pagar:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Establecimiento: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" disabled value="1588">
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">Tipo de pago: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" disabled value="01">
                    </div>
                </div>
                <div class="mb-12 row div-margin">
                    <label for="staticEmail" class="col-sm-7 col-form-label">OXXO: </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputPassword" disabled value="22">
                    </div>
                </div>
                <div class="btn-group div-margin__button" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")? "disabled":"";?> value="Agregar" class="btn btn-outline-primary">Generar PDF</button>
                    <!-- <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")? "disabled":"";?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")? "disabled":"";?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")? "disabled":"";?> value="Cancelar" class="btn btn-info">Cancelar</button> -->
                </div> 
            </form>
        </div>
    </div>
</div>







<?php 
include ('../template/pie.php');
?>


<!--            <div class="form-group">
                    <label for="txtID">ID</label>
                    <input type="text" required readonly class="form-control" name="txtID" id="txtID" placeholder="ID" value="<?php echo $txtID ?>">
                </div> 

               <div class="form-group row">
                    <label for="txtNombre">Tipo de pago</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Clave de agente</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">No. de Poliza</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Fecha limite de pago recibo</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Importe a pagar</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Establecimiento</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Tipo de pago</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="form-group">
                    <label for="txtNombre">OXXO</label>
                    <input type="text" required class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre" value="<?php echo $txtNombre ?>">
                </div>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")? "disabled":"";?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")? "disabled":"";?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")? "disabled":"";?> value="Cancelar" class="btn btn-info">Cancelar</button>
                </div> 
-->