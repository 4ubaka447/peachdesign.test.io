

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Светофор</title>

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

    <input type="text" name="minute" id="minute">
    <button onclick="SendRequest();">Отправить</button>
    <div class="traffic_light_zone" id="traffic_light_zone"></div>



    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript">

        function SendRequest(){
            $.ajax({
                type: "POST",
                url: "obrabotchik.php",
                data: "sid=<?=session_id()?>&minute="+$('#minute').val(),
                success: function(response){
                    $('#traffic_light_zone').css("background-color",response);
                }
            });
        };

    </script>


</body>
</html>