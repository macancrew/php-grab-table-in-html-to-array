<?php

$blink="https://pasanglaut.com/id/papua-barat/makbon";
$bdata=file_get_contents($blink);
$h1=xusd($bdata,'<table class="TablaSolMareas"><tr>','<p class="txt_descripcion"> </p>');


$DOM = new DOMDocument();
@$DOM->loadHTML($h1);
$Detail = $DOM->getElementsByTagName('td');

$list = array();
foreach ($Detail as $n) {
    $list[] = $n->nodeValue;
}

echo "<pre>";
print_r($list);


function xusd($string, $start, $end){
        $string = " ".$string;
        $p1 = strpos($string,$start,0);
        $p2 = strpos($string,$end,0);
        $len = abs($p2-$p1);
return substr($string,$p1,$len);
}



?>
