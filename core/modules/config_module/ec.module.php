<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="media/style/[+manager_theme+]/style.css" />
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            // Tab Functionality
            $("h2.tab").click(function(){
                var sCurrentId = $(this).attr("id");
                $("h2.tab").removeClass("selected");
                $("div.tab-page").css({"display" : "none"});
                $("#tab-" + sCurrentId).css({"display" : "block"});
                $(this).addClass("selected");
            });

            var tab = '[+tab+]';
            $("h2.tab").removeClass("selected");
            $("div.tab-page").css({"display" : "none"});
            if (tab == '' || tab == 'import0'){
                $("#tab-page0").css({"display" : "block"});
                $('#page0').addClass("selected");
            }
            if (tab == 'import'){
                $("#tab-page1").css({"display" : "block"});
                $('#page1').addClass("selected");
            }
            if (tab == 'import2'){
                $("#tab-page2").css({"display" : "block"});
                $('#page2').addClass("selected");
            }
            if (tab == 'import3'){
                $("#tab-page3").css({"display" : "block"});
                $('#page3').addClass("selected");
            }
            if (tab == 'import4'){
                $("#tab-page4").css({"display" : "block"});
                $('#page4').addClass("selected");
            }
            if (tab == 'import5'){
                $("#tab-page5").css({"display" : "block"});
                $('#page5').addClass("selected");
            }
            if (tab == 'import6'){
                $("#tab-page6").css({"display" : "block"});
                $('#page6').addClass("selected");
            }

            $( ".btn-danger" ).click(function() {
                parent.mainMenu.work();
            });


            //$('#submit').prop( "disabled", true );
            $.ajax({
                type: 'get',
                url: '[+moduleurl+]action=getcurs',
                //dataType: 'json',
                success: function (data) {
                    var obj = jQuery.parseJSON( data );
                    $('.usd').val( obj.usd );
                    $('.euro').val( obj.euro );
                    //alert( data );
                }
            });


        });



    </script>
</head>

<body style="background-color:#EEEEEE">

<h1>Импорт-Экспорт</h1>
<div id="actions">
    <ul class="actionButtons">
        <li id="Button1"><a onclick="document.location.href='index.php?a=106';" href="#"><img src="media/style/MODxCarbon/images/icons/stop.png">Закрыть модуль</a></li>
    </ul>
</div>
<div class="sectionBody">

    <div id="modulePane" class="dynamic-tab-pane-control tab-pane">
        <div class="tab-row">
            <h2 id="page0" class="tab"><span>Цены</span></h2>
            <h2 id="page1" class="tab"><span>Контент</span></h2>
            <h2 id="page2" class="tab"><span>skladKapitan (1)</span></h2>
            <h2 id="page3" class="tab"><span>BULROS (2)</span></h2>
            <h2 id="page4" class="tab"><span>2x3 (3)</span></h2>
            <h2 id="page5" class="tab"><span>Офис-ресурс (4)</span></h2>
            <h2 id="page6" class="tab"><span>real-ist (5)</span></h2>


            <!--<a href="index.php?a=112&id=10"><h2 id="page2" class="tab"><span>Комплектации</span></h2></a>
            <a href="index.php?a=112&id=13"><h2 id="page3" class="tab "><span>Модели</span></h2></a>-->
        </div>
        <div id="tab-page0" class="tab-page">
            <p><strong>Экспорт цен (открывать в Excel)</strong></p>

            <form method="POST" action="[+moduleurl+]action=getitemsprice" enctype="multipart/form-data">
                <input type="submit" value='Экспорт цен в CSV (Win)' class="btn btn-success">
                <input type="hidden" value="1" name="cp1251">
            </form><br>
            <form method="POST" action="[+moduleurl+]action=getitemsprice" enctype="multipart/form-data">
                <input type="submit" value='Экспорт цен в CSV (Mac)' class="btn btn-success">
            </form><br>


            <p><strong>Загрузить новые цены из csv</strong></p>
            <p>Используется CSV так как он работает быстрее чем XLS и XLSx, для того что б его получить в Екселе<br> выбираем сохранить как и далее указываем формат <b>CSV (разделители - запятые)</b>
            </p>
            <p>Для изменения цены сначала выгружаем фаил далее изменяем что нам нужно и загружаем назад. Для более быстрой работы используется привязка к ID с сайта. тоесть учавствуют только колонки: 1 (ID), 4(Цена), 5(Старая цена), изменения 2 и 3 колонки на сайте отображаться не будут</p>
            <hr>
            <form method="POST" action="[+moduleurl+]action=import0" enctype="multipart/form-data">
                <input type="file" name="csv">
                <br/><br/>
                <b>Курс валют с CBR.ru: </b>
                USD (<input name="usd" id="usd" class="usd form-control" style="width:70px;text-align:center">)

                &nbsp;&nbsp;&nbsp;&nbsp;EURO (<input name="euro" id="euro" class=" euro form-control" style="width:70px;text-align:center">)
                <br><small>Если данные не заполнились автоматически значит сбоит сайт cbr.ru и нужно или обновить страничку или указать курсы валют руками </small>
                <br/> <br/>
                <input type="submit" value='Импорт цен' class="btn btn-danger">
            </form>

            <br>
            <small style="color:red">* перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a href="index.php?a=93&tab=2">тут</a> последняя вкладка</small>

        </div>
        <div id="tab-page1" class="tab-page">
            <p><strong>Экспорт товаров (открывать в Excel)</strong></p>
            <p>Неопубликованные это те товары которые попали на сайт с файлов поставщиков и которые не отображаются на сайте</p>
            <form method="POST" action="[+moduleurl+]action=getitems-csv" enctype="multipart/form-data">
                <select name="published" style="width:200px;">
                    <option value="1">Опубликованные</option>
                    <option value="0">Неопубликованные</option>
                    <option value="2">Все</option>
                </select>
                <input type="submit" value='Экспорт товаров в CSV (Win)' class="btn btn-success">
                <input type="hidden" value="1" name="cp1251">
            </form><br>
            <form method="POST" action="[+moduleurl+]action=getitems-csv" enctype="multipart/form-data">
                <select name="published" style="width:200px;">
                    <option value="1">Опубликованные</option>
                    <option value="0">Неопубликованные</option>
                    <option value="2">Все</option>
                </select>
                <input type="submit" value='Экспорт товаров в CSV (Mac)' class="btn btn-success">
            </form><br>
            <!--<br>
            <form method="POST" action="[+moduleurl+]action=getitems" enctype="multipart/form-data">
                <input type="submit" value='Экспорт товаров в XLS (Работает медленно)' class="btn btn-success">
            </form><br>-->

            <p><strong>Загрузить данные о товарах из csv</strong></p>
            <p>Используется CSV так как он работает быстрее чем XLS и XLSx, для того что б его получить в Екселе<br> выбираем сохранить как и далее указываем формат <b>CSV (разделители - запятые)</b>
            </p>

            <hr>
            <form method="POST" action="[+moduleurl+]action=import" enctype="multipart/form-data">
                <input type="file" name="csv">
                <br/><br/>
                <b>Курс валют с CBR.ru: </b>
                USD (<input name="usd" id="usd" class="usd form-control" style="width:70px;text-align:center">)

                &nbsp;&nbsp;&nbsp;&nbsp;EURO (<input name="euro" id="euro" class=" euro form-control" style="width:70px;text-align:center">)
                <br><small>Если данные не заполнились автоматически значит сбоит сайт cbr.ru и нужно или обновить страничку или указать курсы валют руками </small>
                <br/> <br/>
                <input type="submit" value='Импорт товаров' class="btn btn-danger">
            </form>
            <br>
            <small style="color:red">* перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a href="index.php?a=93&tab=2">тут</a> последняя вкладка</small>

        </div>

        <div id="tab-page2" class="tab-page">
            <p><strong>skladKapitan</strong> - импорт наличия на складе</p>

            <p><strong>Загрузить данные о товарах из *.xlsx</strong></p>

            <form method="POST" action="[+moduleurl+]action=import2" enctype="multipart/form-data">
                <input type="file" name="csv">
                <br/><br/>
                <input type="submit" value='Импорт' class="btn btn-danger">
            </form>
            <br>
            <small style="color:red">* перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a href="index.php?a=93&tab=2">тут</a> последняя вкладка</small>

        </div>

        <div id="tab-page3" class="tab-page">
            <p><strong>BULROS</strong> - импорт наличия на складе</p>

            <p><strong>Загрузить данные о товарах</strong></p>
            <p><strong>Только фаил типа (Складская рассылка BULROS 11.12.17.xls) ! любой другой может поломать сайт!!!</strong></p>
            <p><strong>Если Фаил не загружается пишет какую то ошибку, то необходимо пересохранить в формат XLSX. Ибо xls старый формат и в данном случае в 65 раз больше размер файла, и на сайте просто не хватает ресурсов с ним работать.</strong></p>
            <form method="POST" action="[+moduleurl+]action=import3" enctype="multipart/form-data">
                <input type="file" name="csv">
                <br/><br/>
                <input type="submit" value='Импорт' class="btn btn-danger">
            </form>
            <br>
            <small style="color:red">* перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a href="index.php?a=93&tab=2">тут</a> последняя вкладка</small>

        </div>

        <div id="tab-page4" class="tab-page">
            <p><strong>2x3</strong> - импорт наличия на складе</p>

            <p><strong>Загрузить данные о товарах</strong></p>
            <p><strong>Только фаил типа (Наличие 2x3 от 08.12.17.xls) ! любой другой может поломать сайт!!!</strong></p>

            <form method="POST" action="[+moduleurl+]action=import4" enctype="multipart/form-data">
                <input type="file" name="csv">
                <br/><br/>
                <input type="submit" value='Импорт' class="btn btn-danger">
            </form>
            <br>
            <small style="color:red">* перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a href="index.php?a=93&tab=2">тут</a> последняя вкладка</small>

        </div>

        <div id="tab-page5" class="tab-page">
            <p><strong>Офис-ресурс</strong> - импорт наличия на складе</p>

            <p><strong>Загрузить данные о товарах</strong></p>
            <p><strong>Только фаил типа (08.12.17.xls) ! любой другой может поломать сайт!!!</strong></p>

            <form method="POST" action="[+moduleurl+]action=import5" enctype="multipart/form-data">
                <input type="file" name="csv">
                <br/><br/>
                <input type="submit" value='Импорт' class="btn btn-danger">
            </form>
            <br>
            <small style="color:red">* перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a href="index.php?a=93&tab=2">тут</a> последняя вкладка</small>

        </div>

        <div id="tab-page6" class="tab-page">
            <p><strong>real-ist-price</strong></p>

            <p>Работает автоматом, обновляет наличие 1 раз в сутки, ночью.</p>



        </div>


        [+totalimp+]

    </div>
</div>
</body>
</html>
<style>
    .red{
        color:red !important;
    }
</style>