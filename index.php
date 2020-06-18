<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/style.css">

</head>
<body>

<!--•	Требуется написать html+css+js код страницы, разделенной на три части (div-а): слева панель на всю высоту
страницы и 30% ширины, справа две горизонтальные части на 70% ширины и 50% высоты.-->
<!--•	Пользователю должна быть доступна возможности изменения ширины левой части и высоты верхней/нижней путем
перетаскивания границ вправо/влево и вверх/вниз соответственно (использовать controlsplitter).-->
<!--•	На всю ширину и высоту нижней часть должен быть развернут контрол с двумя закладками (использовать controltabs) с названиями «один», «два».-->
<!--•	При переключении на закладку «один» должен открываться элементtextarea-а, редактирование которого приводит к изменению содержимого div-а левой части страницы.-->
<!--•	При переключении на закладку «два» должен открываться элементtextarea-а, редактирование которого приводит к изменению содержимого div-а верхней части страницы.-->
<!--•	Допустимо использовать jquery-ui или любые другие известные JS-библиотеки, реализующие splitter-ы и tabber-ы.-->


<div class="wrap">
    <div class="sidebar resizable resizable1">
        <div class="inner">
            <div class="sidebarJs"></div>
        </div>
    </div>
    <div class="content-wrap resizable resizable2">
        <div class="inner">
            <div class="content-top resizableVertical">
                <div class="contentTopJs"></div>
            </div>
            <div class="content-bottom">
                <div class="tabs tabsJs">
                    <ul>
                        <li><a href="#tabs-1">Один</a></li>
                        <li><a href="#tabs-2">Два</a></li>
                    </ul>
                    <div id="tabs-1">
                        <textarea class="sidebarAreaJs" cols="30" rows="10"></textarea>
                    </div>
                    <div id="tabs-2">
                        <textarea class="contentTopAreaJs" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="/index.js"></script>
</html>