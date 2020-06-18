<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<textarea class="textareaJs" cols="30" rows="10"></textarea>

</body>

<script>
    function getRandomPoint(min, max){
        return Math.floor(Math.random() * (max - min)) + min;
    }

    $('.textareaJs').on('mouseenter', function () {
        $('.textareaJs').css({
            "position": "absolute",
            "top": getRandomPoint(0, window.innerHeight - $(this).height())+"px",
            "left": getRandomPoint(0, window.innerWidth - $(this).width())+"px"
        });
    });
</script>
</html>