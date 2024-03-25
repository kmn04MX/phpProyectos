<?php
include('template/cabecera.php')
?>


<div class="col-md-12">
    <div class="jumbotron">
        <!-- <h1 class="display-3">Bienvenido <?php echo $nombreUsuario;?></h1> -->
        <h1 class="display-3">¡Bienvenido a PolizaPDF!</h1>
        <p class="lead">PolizaPDF es una aplicación especializada en la generación rápida y eficiente de pólizas de seguros, específicamente diseñada para clientes de MAPFRE. Con nuestra plataforma, simplificamos el proceso de creación de documentos aseguradores, permitiéndote generar pólizas profesionales y personalizadas en cuestión de minutos.</p>
        <hr class="my-2">
        <p class="lead">Con los siguientes botones podrás elegir el tipo de ficha a elegir para poder generar tu pdf.</p>
        <p class="lead">
            <a class="btn btn-outline-primary btn-lg" href="./seccion/fichapesos.php" role="button">Ficha pesos</a>
            <a class="btn btn-outline-primary btn-lg" href="./seccion/fichadolares.php" role="button">Ficha dolares</a>
        </p>
    </div>
</div>


<?php
include('template/pie.php')
?>