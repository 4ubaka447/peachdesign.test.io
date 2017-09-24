<?php

$m = $_REQUEST['minute'];
$color = svetofor($m);

function svetofor($m) {
    
    if($m%5>=1 && $m%5<=3)
        return 'green';
  
    else if ($m>0)
        return 'red';
}

?>

<html>

<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>traffic-light</title>
        <style>
            .traffic_light_zone {
                background-color: gray;
                width: 200px;
                height: 200px;
                margin: 200px auto;
                border-radius: 50%;
            }

  </style>
    </head>

    <body>

        <form id="form">
                <input type="text" name="minute" id="minute">
                <input type="submit" for="minute" value="Показать">
         </form>

    <div class="traffic_light_zone"></div>

    <script>
        var color = "<? echo $color ?>";
        document.querySelector('.traffic_light_zone').style.backgroundColor = color;
    </script>

    </body>
</html>
