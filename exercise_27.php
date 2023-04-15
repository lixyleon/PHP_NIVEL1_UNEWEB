<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Operadores en PHP</title>
</head>
<body>
    <?php
        //tipos de operadores en PHP

        /* 
        - operadores aritmeticos
        - operadores de asignacion
        - operadores de comparación
        - operaciones de incremento y decremento
        - operadores logicos
        - operadores de cadena de caracteres
        - operadores de arreglos
        - operadores de asignacion condicional
        */
      // operadores aritmeticos  
/*
    $x=10;
    $y=5;
        echo '<br>';
        echo $x+$y;
        echo '<br>';
        echo $x-$y;
        echo '<br>';
        echo $x*$y;
        echo '<br>';
        echo $x/$y;
        echo '<br>';
        echo $x%$y;
        echo '<br>';
        echo $x**$y;

    // operadores de asignacion
        echo '<br>';
        echo $x=$y;
        echo '<br>';
        echo $x+=$y;
        echo '<br>';
        echo $x-=$y;
        echo '<br>';
        echo $x*=$y;
        echo '<br>';
        echo $x/=$y;
        echo '<br>';
        echo $x%=$y;
    // operadores de comparacion
        echo '<br>';
        $x='15';
        $y=15;
        var_dump($x==$y);
    // identical
        echo '<br>';
        $x='15';
        $y=15;
        var_dump($x===$y); // se considera el valor y el tipo de dato */
    // no es igual o diferente de
    $x='15';
    $y=15;
        echo '<br>';
        var_dump($x!=$y);
        echo '<br>';
        var_dump($x<>$y);
        echo '<br>';
        var_dump($x!==$y);
        echo '<br>';
        var_dump($x<$y);
        echo '<br>';
        var_dump($x>$y);
        echo '<br>';
        var_dump($x<=$y);
        echo '<br>';
        var_dump($x>=$y);
    // nuevo operador de nave espaial de php a partir de la version 7
        echo '<br>';
        $x=5;
        $y=10;
        echo ($x <=>$y); // retorna -1 debido a que $x < $y
        echo '<br>';
        $x=10;
        $y=10;
        echo ($x <=>$y); // retorna 0 debido a que $x = $y
        echo '<br>';
        $x=15;
        $y=10;
        echo ($x <=>$y); // retorna 1 debido a que $x > $y
        echo '<br>';

    //operadores de incremento y decremento php

    // preincremento ++$x primero incrementa y luego la muestra

    $x=15;
    echo ++$x;

    // posincremento $x++ primero muestra y luego incrementa
    echo '<br>';  
    $x=20;
    echo $x++;

    $x=10;
    echo '<br>';  //predecremento
    echo --$x;

    $x=5;
    echo '<br>';  //postdecremento
    echo $x--;
    echo '<br>';
    echo $x; // la siguiente llamado aparece 

    // operadores logicos
    echo '<br>';
    //  and
    $x=19;
    $y=15;

    if($x==19 and $y==15){
        echo 'Buenas tardes';
    }
    echo '<br>';
    
    if($x==19 and $y==33){
        echo 'Buenas noches';
    }

    // or / union de eventos incluyendo interseccion
    if($x==19 or $y==15){
        echo 'Feliz dia';
    }
    echo '<br>';
    
    if($x==19 or $y==33){
        echo 'Feliz sabado';
    }
    echo '<br>';
    // && / equvalente al and
    if($x==19 and $y==15){
        echo 'Buenas tardes';
    }
    echo '<br>';
    
    if($x==19 and $y==33){
        echo 'Buenas noches';
    }

    // not o !
    if($x!=15){
        echo 'Gracias';
    }
    echo '<br>';
    
    if($x!=19){
        echo 'A la orden';
    }
    
    // || / equivalente or
    if($x==19 || $y==15){
        echo 'correcto';
    }
    echo '<br>';
    
    if($x==19 || $y==33){
        echo 'incorrecto';
    }

    if($x==55 || $y==33){
        echo 'incorrecto';
    }

    echo '<br>';
    
    // xor /union de eventos sin interseccion    
    if($x==19 xor $y==15){
        echo 'hola';
    }
    echo '<br>';
    
    if($x==19 || $y==33){
        echo 'chao';
    }
    
    // operador de cadena de caracteres
    // operador .

    $texto1="Bonito";
    $texto2=" Dia";
    echo '<br>';
    echo $texto1.$texto2;

    // operador .=

    $texto1="Felices";
    $texto2=" Pascuas";
    echo '<br>';
    $texto1.=$texto2;
    echo $texto1;

    // operadores de arreglos
    echo '<br>';
    $a=array('a'=> 'rojo', 'b'=>'azul');
    $b=array('c'=>'verde','d'=>'amarillo');

    print_r($a+$b);

    $a=array('a'=> '1234', 'b'=>'7654');
    $b=array('c'=>'carro','d'=>'bicicleta');
    $c=array('a'=> 1234, 'b'=>7654);
    $d=array('a'=> '1234', 'b'=>'7654');
    
   
        // ==
        if($a==$b){
            echo 'no son iguales';
        }
                       
        echo '<br>';
        if($a==$c){
            echo 'son iguales';
        }
                       
        echo '<br>';
        
        // ===
        if($a===$c){
            echo 'no son identicos';
        }
                       
        echo '<br>';

        
        // !=
        if($a!=$c){
            echo 'son iguales, no se cumple';
        }
                       
        echo '<br>';

         // ===
         if($a===$c){
            echo 'no son identicos, no se cumple';
        }
        echo '<br>';
        if($a===$d){
            echo 'son identicos, se cumple';
        }
        echo '<br>';
        
        // <>
        if($a<>$c){
            echo 'no son distintos, no se cumple otra vez';
        }
        echo '<br>';
        if($d<>$b){
            echo 'son distintos, se cumple otra vez';
        }
                       
        echo '<br>';

         //!==
         if($a!==$b){
            echo 'no son identicos, se cumple';
        }
        if($a!==$d){
            echo 'son identicos, no se cumple';
        }

        // ternario?:

        // si empty($usuario)=es verdadera, asigna $estatus=anomino
        echo '<br>';
        echo $estatus=(empty($usuario)) ? "anonimo":"ingresó";
        echo '<br>';
// equivalente

if($usuario==null){
    $estatus='anonimo';
    echo($estatus);
}
else{
    $estatus='ingreso';
    echo($estatus);
}

echo '<br>';
echo $estatus=(!empty($usuario)) ? "anonimo":"ingresó";
echo '<br>';

$usuario='jose';
echo $estatus=(empty($usuario)) ? "anonimo":"ingresó";

// operador ??
// la variable usuario tiene un valor del $_GET['usuario']
// y es 'anonimo' si no existe
echo '<br>';
echo $usuario=$_GET['usuario']?? 'anonimo';
echo '<br>';

// la variable color es azul, si el color no existe o es nulo

$color='verde';
echo $color=$color ?? 'azul';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>