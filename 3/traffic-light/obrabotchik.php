<?php

function svetofor($m) {
    
    if($m%5>=1 && $m%5<=3)
        return 'green';
  
    else if ($m>0)
        return 'red';
}

?>

<?php

echo svetofor($_POST['minute'])

?>