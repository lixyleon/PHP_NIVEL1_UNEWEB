<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Matematicas en php</title>
</head>
<body>
    <?php
        //impresion del numero p
        echo '<br>';
        echo(pi());// devuelve el valor de pi
        

        //funciones para hallar el minimo y el maximo
        echo '<br>';
        echo(min(0,150,400,500,1234,-700,-8));
        echo '<br>';
        echo(max(0,150,400,500,1234,-700,-8));

        // funcion para hallar el absoluto de un numero
        echo '<br>';
        echo(abs(-150.23));

        // funcion de raiz cuadrada
        echo '<br>';
        echo(sqrt(9));

        //funcion de redondeo
        echo '<br>';
        echo(round(0.60));
        echo '<br>';
        echo(round(0.49));

        //funcion de numeros aleatorios
        echo '<br>';
        echo(rand());

        echo '<br>';
        echo(rand(500,5000));

    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>