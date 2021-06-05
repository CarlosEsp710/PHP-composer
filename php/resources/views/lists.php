<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Listado de productos</h1>
                <?php
                foreach ($products as $product) {
                    echo "<strong>{$product->name}</strong> - {$product->description} <br>";
                }
                ?>
                <hr>
                <p>
                    <a href="pdf.php">Exportar en pdf</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>