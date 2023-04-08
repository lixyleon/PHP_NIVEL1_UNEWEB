<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Tipo de datos en PHP</title>
</head>
<body>
    <?php
    /* Las variables pueden almacenar datos de distintos tipos y diferentes tipos de datos pueden realizar cosas diferentes*/
    //PHP adminite los siguientes tipos de datos:

    /* 
    --string
    --interger
    --float (numeros de coma flotante o tambien llamados double o decimal)
    --boolean
    --array
    --object
    --null
    --resource
    */

    //PHP float example

    $x=5.25;
    var_dump($x);

    echo '<br>';

    //PHP Boolen example
    $y=true;
    echo $y;

    // PHP array

    $colores=array('azul','amarillo','rojo');
    echo '<br>';
    var_dump($colores)




    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>