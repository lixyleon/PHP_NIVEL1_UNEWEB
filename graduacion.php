<?php 

    $grades = [44,84,0,14];
 
/*for ($i = 0; $i < count($grades); $i++) {
     
     if($grades[$i]>=38 ){
            $multip= 5*(1+round((($grades[$i]-1)/5)));
            if($multip -$grades[$i]<3){
                $result[$i] = $multip;
            }  else {
                $result[$i] = $grades[$i];
                
        }
            
    }
    else {
            $result[$i] = $grades[$i];
            
    }
}*/


 for($i = 0; $i < count($grades); $i++){
    if($grades[$i]<38){
        $result[$i]= $grades[$i];
    }
    else{
   $mul = 5*(1+intval((($grades[$i]-1)/5)));
        if($mul-$grades[$i]<3){
            $result[$i] = $mul;
        } else{
            $result[$i]= $grades[$i];
        }
    }
 }


 print_r($result);