<?php

function contarValoresArray($array)

{

	$contar=array();
    $arr = array();
    $i=0;

	foreach($array as $value)

	{

		if(isset($contar[$value]))

		{

			// si ya existe, le añadimos uno

			$contar[$value]+=1;
           $arr[$i] = $value;
           $i++;
           

		}else{

			// si no existe lo añadimos al array

			$contar[$value]=1;
           
		}

	}

	return $arr;


}

 

$miArray=array(1, 5, 1, 5, 3);

print_r(contarValoresArray($miArray));





?>