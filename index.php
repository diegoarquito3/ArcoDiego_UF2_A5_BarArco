<?php
if (file_exists('./xml/carta.xml')) {
    $menu = simplexml_load_file('./xml/carta.xml');
} else {
    exit('Error abriendo archivo XML con los datos de la carta.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Bar Arco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/favicon.svg" type="image/x-icon" />
</head>


<body> <!--Tabla de datos-->

<!--navbar del bootstrap-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Carta:</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#entrantes">Entrantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#bebidas">Bebidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#combinados">Combinados</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#postres">Postres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#vinos">Vinos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="contenido">
<div class='header'>
    <div class='logo'>
        <img src="./img/LOGO_CARTA.png" alt="Título de la carta" width="150" height="150">
    </div>

        <h1>BAR ARCO</h1>
        <h2>Entrantes, bebidas, combinados, postres y vinos.</h2>
    </div>

        <h3 id="entrantes">ENTRANTES</h3> <!--hacemos un id para vincularlo con el navbar-->
            <div class='eslogan'>
                <p>"Deliciosos bocados que despiertan el apetito."</p>
        <div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                        <th>Alérgenos</th>
                    </tr>
                </thead>
            <tbody>

                <?php
                foreach($menu->plato as $plato){
                    if ($plato['tipo'] == 'entrante') {
                    echo '<tr>';
                    echo '<td>'.$plato->nombre.'</td>';
                    echo '<td>'.$plato->precio.'</td>';
                    echo '<td>'.$plato->descripcion.'</td>';
                    echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="50" height="50"></td>';
                    echo '</tr>';
                }
                }
                ?>
            </tbody>
            </table>
        </div>


        <div>
        <h3 id="bebidas">BEBIDAS</h3>
            <div class='eslogan'>
                <p>"La clave para saciar tu sed con estilo."</p>
            <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                        <th>Alérgenos</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($menu->plato as $plato){
                    if ($plato['tipo'] == 'bebida') {
                    echo '<tr>';
                    echo '<td>'.$plato->nombre.'</td>';
                    echo '<td>'.$plato->precio.'</td>';
                    echo '<td>'.$plato->descripcion.'</td>';
                    echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="50" height="50"></td>';
                    echo '</tr>';
                    }
                }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</div>


<div>
    <h3 id="combinados">COMBINADOS</h3>
            <div class='eslogan'>
                <p>"Descubre el arte de la mezcla en cada combinado."</p>
            <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                        <th>Alérgenos</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($menu->plato as $plato){
                    if ($plato['tipo'] == 'combinado') {
                    echo '<tr>';
                    echo '<td>'.$plato->nombre.'</td>';
                    echo '<td>'.$plato->precio.'</td>';
                    echo '<td>'.$plato->descripcion.'</td>';
                    echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="50" height="50"></td>';
                    echo '</tr>';
                    }
                }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</div>


<div>
        <h3 id="postres">POSTRES</h3>
            <div class='eslogan'>
                <p>"Dulces placeres en cada bocado."</p>
            <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                        <th>Alérgenos</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($menu->plato as $plato){
                    if ($plato['tipo'] == 'postre') {
                    echo '<tr>';
                    echo '<td>'.$plato->nombre.'</td>';
                    echo '<td>'.$plato->precio.'</td>';
                    echo '<td>'.$plato->descripcion.'</td>';
                    echo '<td><img src="'.$plato->imagen.'" alt="'.$plato->nombre.'" width="50" height="50"></td>';
                    echo '</tr>';
                    }
                }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</div>


<div>

        <h3 id="vinos">VINOS</h3>
            <div class='eslogan'>
                <p>"Cada sorbo, una historia que contar."</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descripción (kcal)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($menu->plato as $plato){
                    if ($plato['tipo'] == 'vinos') {
                    echo '<tr>';
                    echo '<td>'.$plato->nombre.'</td>';
                    echo '<td>'.$plato->precio.'</td>';
                    echo '<td>'.$plato->descripcion.'</td>';
                    echo '</tr>';
                    }
                }
                ?>
            </tbody>
            </table>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>