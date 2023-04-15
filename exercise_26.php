<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Constantes en php</title>
</head>
<body>
    <?php
    
    define("CUMPLEANIOS",'Feliz cumpleaños a ti ');
    echo CUMPLEANIOS;
    echo '<br>';
    define("ANIVERSARIO",'Feliz aniversario a ti ',true);
    echo aniversario;

    echo '<br>';
    // creacion de constantes de arreglos

    define("CARROS",[
        "BMW",
        "Chevrolet",
        "Toyota"
    ]);

    echo CARROS[1];
    echo '<br>';
    //
    define("REFLEXION",'Por el cumpleaños se regala un carro ');
    echo REFLEXION;

    /*function miPrueba(){
        echo REFLEXION;
    }

    miPrueba();


    //ejercicio de funciones
    echo '<br>';

    function suma($numero1,$numero2){
        echo $numero1+$numero2;
    }

    suma(3,7);*/
    

    function miPrueba(){
        echo REFLEXION.carros[1].ANIVERSARIO;
    }

    miPrueba();

    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>