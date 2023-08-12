<?php

$result =[0,0,0,0,0];

for($i=0;$i<count($arr);$i++){
    switch($arr[$i]){
    case 1:
        $result[0] += 1;
        break;
    case 2:
        $result[1] += 1;
        break;
    case 3:
        $result[2] += 1;
        break;
    case 4:
        $result[3] += 1;
        break;
    case 5:
        $result[4] += 1;
        break;
      
    }
}
$max = max($result);
for($i=0;$i<count($result);$i++){
    if($result[$i]==$max){
        return ++$i;
    }
}
print_r(contarValoresArray($miArray));





?>
