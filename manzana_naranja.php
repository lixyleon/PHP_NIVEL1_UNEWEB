<?php
$s = 7;
$t = 11;
$a = 5;
$b = 15;
$m = 3;
$n = 2;
$apple = [-2,2,1];
$orange = [5,-6];

$countm= count($apple);
$countn=count($orange);
$tm = 0;
$tn = 0;

for($i=0;$i<$countm;$i++){
    $mt[$i] = $apple[$i]+$a;
    if($mt[$i]>=$s and $mt[$i]<=$t){
        $tm += 1;
    }
 }

 for($j=0;$j<$countn;$j++){
    $nt[$j] = $orange[$j]+$b;
    if($nt[$j]>=$s and $nt[$j]<=$t){
        $tn += 1;
    }
 }

 echo "$tm<br>$tn";
 //echo $tm."\n".$tn;
 ?>