<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="media/style/default/style.css"/>
    <style>
        .webix_pager_item, .webix_pager_item_selected {
            padding: 0 !important
        }

        ;
        .myhover {
            background: #FEFEFE !important;
        }
    </style>


</head>
<body>
<br>
<div id="actions">
    <ul class="actionButtons">
        <li id="Button5"><a onclick="document.location.href='index.php?a=106';" href="#">Закрыть</a></li>
    </ul>
</div>
<div class="sectionBody">
    <div id="modulePane" class="dynamic-tab-pane-control tab-pane">
        <div id="tab-page1" class="tab-page" style="display:block;">
            <!--div>
                <a href="[+moduleurl+]action=getCsv" class="btn btn-primary">Выгрузить в CSV</a>
                <br><br>
            </div-->

            <div id="statuses" style="margin-bottom:10px"></div>
            <div style="clear:both"></div>
            <div id="pager"></div>


        </div>

    </div>
</div>
</body>
</html>
