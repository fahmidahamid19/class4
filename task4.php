<?php
function recurSum($n) 
{ if ($n==1) {
 	echo $n;
 }
    if ($n <=1)
        return $n;
    echo "$n+";
    return $n + recurSum($n - 1); 
 
} 
$n = 5; 
echo "=".(recurSum($n)); 
?> 
