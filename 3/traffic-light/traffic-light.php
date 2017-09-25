<?php

$m = $_POST['minute'];
$color = svetofor($m);

function svetofor($m) {
    
    if($m%5>=1 && $m%5<=3)
        return 'green';
  
    else if ($m>0)
        return 'red';
}

?>
