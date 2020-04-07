<?php

echo '<fieldset id="create_edit">

            <h1>
                <i class="fa fa-edit"></i>Main<small>(1)</small>            </h1>

            <div id="actions">
			<div class="btn-group">
			
					<a class="btn btn-secondary" href="javascript:;" onclick="actions.new();">
						<i class="fa fa-file-o"></i><span>Дочерний ресурс</span>
					</a>
					<a class="btn btn-secondary" href="javascript:;" onclick="actions.newlink();">
						<i class="fa fa-link"></i><span>Дочерняя веб-ссылка</span>
					</a>
				
				<div class="btn-group dropdown">
					<a id="Button1" class="btn btn-success" href="javascript:;" onclick="actions.save();">
						<i class="fa fa-floppy-o"></i><span>Сохранить</span>
					<i class="fa fa-plus"></i><span> + </span><i class="fa fa-pencil"></i><span>Продолжить</span></a>
					<span class="btn btn-success plus dropdown-toggle"></span>
					<select id="stay" name="stay">
						
							<option id="stay1" value="1">Создать новый</option>
						
						<option id="stay2" value="2" selected="selected">Продолжить</option>
						<option id="stay3" value="">Закрыть</option>
					</select>
				<div class="dropdown-menu"><span class="btn btn-block" data-id="0"><i class="fa fa-file-o"></i> <span>Создать новый</span></span><span class="btn btn-block" data-id="2"><i class="fa fa-reply"></i> <span>Закрыть</span></span></div></div>
					<a id="Button6" class="btn btn-secondary" href="javascript:;" onclick="actions.duplicate();">
						<i class="fa fa-clone"></i><span>Сделать копию</span>
					</a>
					
				<a id="Button3" class="btn btn-secondary" href="javascript:;" onclick="actions.delete();">
					<i class="fa fa-trash"></i><span>Удалить</span>
				</a>
				<a id="Button5" class="btn btn-secondary" href="javascript:;" onclick="actions.cancel();">
					<i class="fa fa-times-circle"></i><span>Отмена</span>
				</a>
				<a id="Button4" class="btn btn-secondary" href="javascript:;" onclick="actions.view();">
					<i class="fa fa-eye"></i><span>Просмотр</span>
				</a>
			</div>
		</div>
            
            <!-- start main wrapper -->
            <div class="sectionBody">

                <div class="dynamic-tab-pane-control tab-pane" id="documentPane"><div class="tab-row-container"><div class="tab-row"><h2 class="tab selected" data-target="#tabGeneral"><span>Общие</span></h2><h2 class="tab" data-target="#tabSettings"><span>Настройка страницы</span></h2></div><i class="fa fa-angle-left prev disable"></i><i class="fa fa-angle-right next"></i></div>
                    <script type="text/javascript">
                      var tpSettings = new WebFXTabPane(document.getElementById("documentPane"), true );
                    </script>

                    <!-- General -->
                                            <div class="tab-page" id="tabGeneral" style="display: block;">
                            
                            <script type="text/javascript">tpSettings.addTabPage(document.getElementById("tabGeneral"));</script>

                            <table>
                                <tbody><tr>
                                    <td>
                                        <span class="warning">Заголовок</span>
                                        <i class="fa fa-question-circle" data-tooltip="Введите имя/заголовок ресурса. Нежелательно использовать при этом обратный слэш (\)"></i>
                                    </td>
                                    <td>
                                        <input name="pagetitle" type="text" maxlength="255" value="Main" class="inputBox" onchange="documentDirty=true;" spellcheck="true">
                                        <script>document.getElementsByName("pagetitle")[0].focus();</script>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Расширенный заголовок</span>
                                        <i class="fa fa-question-circle" data-tooltip="Здесь вы можете ввести расширенный заголовок вашего ресурса, что может быть полезно для поисковых систем."></i>
                                    </td>
                                    <td>
                                        <input name="longtitle" type="text" maxlength="255" value="" class="inputBox" onchange="documentDirty=true;" spellcheck="true">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Описание</span>
                                        <i class="fa fa-question-circle" data-tooltip="Здесь вы можете ввести описание ресурса."></i>
                                    </td>
                                    <td>
                                        <input name="description" type="text" maxlength="255" value="" class="inputBox" onchange="documentDirty=true;" spellcheck="true">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Псевдоним</span>
                                        <i class="fa fa-question-circle" data-tooltip="Здесь вы можете выбрать псевдоним для ресурса. Псевдоним позволяет обращаться к ресурсу по адресу: http://example.com/псевдоним. ВНИМАНИЕ: функция будет работать только при включенных \'дружественных URL\'."></i>
                                    </td>
                                    <td>
                                        <input name="alias" type="text" maxlength="100" value="main" class="inputBox" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Атрибуты ссылки</span>
                                        <i class="fa fa-question-circle" data-tooltip="Здесь вы можете ввести атрибуты ссылки для этой страницы, например target=&quot;_blank&quot; или rel=&quot;external&quot;."></i>
                                    </td>
                                    <td>
                                        <input name="link_attributes" type="text" maxlength="255" value="" class="inputBox" onchange="documentDirty=true;">
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td valign="top">
                                        <span class="warning">Аннотация (введение)</span>
                                        <i class="fa fa-question-circle" data-tooltip="Введите краткое описание ресурса" spellcheck="true"></i>
                                    </td>
                                    <td valign="top">
                                        <textarea id="introtext" name="introtext" class="inputBox" rows="3" cols="" onchange="documentDirty=true;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Шаблон</span>
                                        <i class="fa fa-question-circle" data-tooltip="Здесь вы можете указать, какой шаблон должен использовать ресурс. Выберите (blank), если хотите, чтобы ресурс не использовал никаких шаблонов (рекомендуется для пустых ресурсов, выполняющих только роль контейнера)."></i>
                                    </td>
                                    <td>
                                        <select id="template" name="template" class="inputBox" onchange="templateWarning();">
                                            <option value="0">(blank)</option>
                                            					<optgroup label="Без категории">
					<option value="3">Minimal Template (3)</option>
					</optgroup>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Пункт меню</span>
                                        <i class="fa fa-question-circle" data-tooltip="Пункт меню - это параметр, который можно использовать для отображения краткого заголовка ресурса в меню."></i>
                                    </td>
                                    <td>
                                        <input name="menutitle" type="text" maxlength="255" value="" class="inputBox" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Позиция в меню</span>
                                        <i class="fa fa-question-circle" data-tooltip="Позиция (индекс) в меню - это порядковый номер ресурса в меню. Эту величину можно также использовать в разработке сниппетов."></i>
                                    </td>
                                    <td>
                                        <input name="menuindex" type="text" maxlength="6" value="0" class="inputBox" onchange="documentDirty=true;">
                                        <a href="javascript:;" class="btn btn-secondary" onclick="var elm = document.mutate.menuindex;var v=parseInt(elm.value+\'\')-1;elm.value=v>0? v:0;elm.focus();documentDirty=true;return false;"><i class="fa fa-angle-left"></i></a>
                                        <a href="javascript:;" class="btn btn-secondary" onclick="var elm = document.mutate.menuindex;var v=parseInt(elm.value+\'\')+1;elm.value=v>0? v:0;elm.focus();documentDirty=true;return false;"><i class="fa fa-angle-right"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Показывать в меню</span>
                                        <i class="fa fa-question-circle" data-tooltip="Включите этот параметр для отображения ресурса в каком-либо меню сайта. Имейте в виду, некоторые сниппеты могут игнорировать этот параметр."></i>
                                    </td>
                                    <td>
                                        <input name="hidemenucheck" type="checkbox" class="checkbox" checked="checked" onclick="changestate(document.mutate.hidemenu);"><input type="hidden" name="hidemenu" class="hidden" value="0">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="warning">Папка</span>
                                        <i class="fa fa-question-circle" data-tooltip="Щелкните мышью на значке контейнера вверху, чтобы включить (выключить) режим выбора родительского ресурса, затем выберите его в дереве сайта слева."></i>
                                    </td>
                                    <td valign="top">
                                                                                <i id="plock" class="fa fa-folder" onclick="enableParentSelection(!allowParentSelection);"></i>
                                        <b><span id="parentName">0 (Testing)</span></b>
                                        <input type="hidden" name="parent" value="0" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr></tr>
                                
                                                                    <tr>
                                        <td colspan="2">
                                            <hr>
                                            <!-- Content -->
                                            <div class="clearfix">
                                                <span id="content_header">Содержимое ресурса</span>
                                                <label class="float-right">Редактор:                                                    <select id="which_editor" class="form-control form-control-sm" size="1" name="which_editor" onchange="changeRTE();">
                                                        <option value="none">Нет</option>
                                                                                                            </select>
                                                </label>
                                            </div>
                                            <div id="content_body">
                                                                                                    <div class="section-editor clearfix">
                                                        <textarea id="ta" name="ta" onchange="documentDirty=true;">test
</textarea>
                                                    </div>
                                                                                                </div>
                                        </td>
                                    </tr>
                                    <!-- end .sectionBody -->
                                                            </tbody></table>

                            
                        <!-- Template Variables -->

                                    <div class="sectionHeader" id="tv_header">Параметры (TV)</div>
                                        <div class="sectionBody tmplvars">
                                            <table>
                                        <tbody><tr>
                                            <td><span class="warning">No index page<br><small class="protectedNode">[*noIndex*]</small></span><br><span class="comment">Meta robots</span></td>
                                            <td><div style="position:relative;"><label class="checkbox"><input type="checkbox" value="<meta name=&quot;robots&quot; content=&quot;noindex, nofollow&quot;>" id="tv_0" name="tv1[]" onchange="documentDirty=true;">Нет</label><br></div></td>
                                        </tr>
                                        <tr><td colspan="2"><div class="split"></div></td></tr>

                                        <tr>
                                            <td><span class="warning">Meta description<br><small class="protectedNode">[*desc*]</small></span><br><span class="comment">Meta description</span></td>
                                            <td><div style="position:relative;"><textarea id="tv2" name="tv2" cols="40" rows="15" onchange="documentDirty=true;" style="width:100%">[*introtext*]</textarea></div></td>
                                        </tr>
                                        <tr><td colspan="2"><div class="split"></div></td></tr>

                                        <tr>
                                            <td><span class="warning">Meta title<br><small class="protectedNode">[*titl*]</small></span><br><span class="comment">Meta title</span></td>
                                            <td><div style="position:relative;"><input type="text" id="tv3" name="tv3" value="[*pagetitle*] - [(site_name)]" tvtype="text" onchange="documentDirty=true;" style="width:100%"></div></td>
                                        </tr>
                                        <tr><td colspan="2"><div class="split"></div></td></tr>

                                        <tr>
                                            <td><span class="warning">Meta keywords<br><small class="protectedNode">[*keyw*]</small></span><br><span class="comment">Meta keywords</span></td>
                                            <td><div style="position:relative;"><input type="text" id="tv4" name="tv4" value="[*pagetitle*]" tvtype="text" onchange="documentDirty=true;" style="width:100%"></div></td>
                                        </tr>
                                    </tbody></table>
                                </div>

                        <!-- end Template Variables -->

                        </div>
                        <!-- end #tabGeneral -->

                        <!-- Settings -->
                        <div class="tab-page" id="tabSettings" style="display: none;">
                            
                            <script type="text/javascript">tpSettings.addTabPage(document.getElementById("tabSettings"));</script>

                            <table>
                                                                <tbody><tr>
                                    <td>
                                        <span class="warning">Публиковать</span>
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте, чтобы опубликовать ресурс сразу после сохранения."></i>
                                    </td>
                                    <td>
                                        <input name="publishedcheck" type="checkbox" class="checkbox" checked="" onclick="changestate(document.mutate.published);">
                                        <input type="hidden" name="published" value="1">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Дата публикации</span>
                                        <i class="fa fa-question-circle" data-tooltip="Если вы установите дату публикации, ресурс будет опубликован по наступлению этой даты. Нажмите на значок календаря, чтобы выбрать дату, либо на значок рядом, чтобы удалить дату публикации. Это будет означать, что ресурс не будет публиковаться автоматически."></i>
                                    </td>
                                    <td>
                                        <input type="text" id="pub_date" name="pub_date" class="DatePicker" value="" onblur="documentDirty=true;" autocomplete="off">
                                        <a href="javascript:" onclick="document.mutate.pub_date.value=\'\'; return true;" onmouseover="window.status=\'Удалить дату\'; return true;" onmouseout="window.status=\'\'; return true;">
                                            <i class="fa fa-calendar-times-o" title="Удалить дату"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <em> dd-mm-YYYY HH:MM:SS</em></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Дата отмены публикации</span>
                                        <i class="fa fa-question-circle" data-tooltip="Если вы установите дату отмены публикации, ресурс будет снят с публикации по наступлению этой даты. Нажмите на значок календаря, чтобы выбрать дату, либо на значок рядом, чтобы удалить дату отмены публикации. Это будет означать, что ресурс не будет снят с публикации автоматически."></i>
                                    </td>
                                    <td>
                                        <input type="text" id="unpub_date" name="unpub_date" class="DatePicker" value="" onblur="documentDirty=true;" autocomplete="off">
                                        <a href="javascript:" onclick="document.mutate.unpub_date.value=\'\'; return true;" onmouseover="window.status=\'Удалить дату\'; return true;" onmouseout="window.status=\'\'; return true;">
                                            <i class="fa fa-calendar-times-o" title="Удалить дату"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <em> dd-mm-YYYY HH:MM:SS</em>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="split"></div>
                                    </td>
                                </tr>

                                                                    <tr>
                                        <td>
                                            <span class="warning">Тип ресурса</span>
                                            <i class="fa fa-question-circle" data-tooltip="Веб-ссылка на ресурс в интернете, включая другие ресурсы Evolution CMS, внешние веб-страницы, изображения или другие файлы в интернете. Для ресурса должен быть задан тип содержимого text/html, а в местонахождении содержимого - отображаемое."></i>
                                        </td>
                                        <td>
                                            <select name="type" class="inputBox" onchange="documentDirty=true;">
                                                <option value="document" selected="selected">Веб-страница</option>
                                                <option value="reference">Веб-ссылка</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span class="warning">Тип содержимого</span>
                                            <i class="fa fa-question-circle" data-tooltip="Выберите тип содержимого для ресурса. Если вы не уверены в том, какой тип данных должен быть у ресурса, оставьте text/html."></i>
                                        </td>
                                        <td>
                                            <select name="contentType" class="inputBox" onchange="documentDirty=true;">
                                                					<option value="text/html" selected="selected">text/html</option>
					<option value="text/plain">text/plain</option>
					<option value="text/xml">text/xml</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="warning">Местонахождение содержимого</span>
                                            <i class="fa fa-question-circle" data-tooltip="Этот параметр определяет, как браузер должен обработать ресурс. Для того, чтобы ресурс стал доступным для скачивания, а не отображался в окне браузера, выберите \'Прикрепленное\'."></i>
                                        </td>
                                        <td>
                                            <select name="content_dispo" class="inputBox" size="1" onchange="documentDirty=true;">
                                                <option value="0" selected="selected">Отображаемое</option>
                                                <option value="1">Прикрепленное</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <div class="split"></div>
                                        </td>
                                    </tr>
                                    
                                <tr>
                                    <td>
                                        <span class="warning">Контейнер (содержит дочерние ресурсы)</span>
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте, чтобы ресурс выполнял также роль папки (родителя) для других ресурсов. Не стоит особо заострять внимание на этом параметре – Evolution CMS автоматически установит для ресурса режим папки, если внутри него начнут создаваться ресурсы."></i>
                                    </td>
                                    <td>
                                        <input name="isfoldercheck" type="checkbox" class="checkbox" onclick="changestate(document.mutate.isfolder);">
                                        <input type="hidden" name="isfolder" value="0" onchange="documentDirty=true;">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="warning">Участвует в URL</span>
                                        <i class="fa fa-question-circle" data-tooltip="Для участия данного документа в адресной строке поставьте галку, и наоборот - снимите, если псевдоним этого документа нужно убрать из URL."></i>
                                    </td>
                                    <td>
                                        <input name="alias_visible_check" type="checkbox" class="checkbox" checked="" onclick="changestate(document.mutate.alias_visible);"><input type="hidden" name="alias_visible" value="1">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <span class="warning">Использовать HTML-редактор</span>
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте, чтобы для редактирования ресурса использовался HTML-редактор. Если ресурс содержит JavaScript или формы - снимите галочку, чтобы редактировать его в режиме HTML-кода (чтобы HTML-редактор не вносил никаких изменений в код)."></i>
                                    </td>
                                    <td>
                                        <input name="richtextcheck" type="checkbox" class="checkbox" checked="" onclick="changestate(document.mutate.richtext);">
                                        <input type="hidden" name="richtext" value="1" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Показывать дочерние ресурсы</span>
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте, чтобы показывать дочерние ресурсы в дереве документов"></i>
                                    </td>
                                    <td>
                                        <input name="donthitcheck" type="checkbox" class="checkbox" checked="checked" onclick="changestate(document.mutate.donthit);"><input type="hidden" name="donthit" value="0" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Доступен для поиска</span>
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте для того, чтобы разрешить поиск в содержимом этого ресурса (внутренней поисковой машиной). Этот параметр можно также использовать в разработке сниппетов."></i>
                                    </td>
                                    <td>
                                        <input name="searchablecheck" type="checkbox" class="checkbox" checked="" onclick="changestate(document.mutate.searchable);"><input type="hidden" name="searchable" value="1" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Кэшируемый</span>
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте для того, чтобы разрешить кэширование ресурса. Будьте внимательны в том случае, если ресурс содержит вызовы сниппетов - возможно, лучше отменить кэширование."></i>
                                    </td>
                                    <td>
                                        <input name="cacheablecheck" type="checkbox" class="checkbox" checked="" onclick="changestate(document.mutate.cacheable);">
                                        <input type="hidden" name="cacheable" value="1" onchange="documentDirty=true;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="warning">Очистить кэш</span>
                                        <input type="hidden" name="syncsite" value="1">
                                        <i class="fa fa-question-circle" data-tooltip="Отметьте для того, чтобы очистить кэш после сохранения изменений этого ресурса. В этом случае посетители увидят свежую версию ресурса."></i>
                                    </td>
                                    <td>
                                        <input name="syncsitecheck" type="checkbox" class="checkbox" checked="checked" onclick="changestate(document.mutate.syncsite);">
                                    </td>
                                </tr>
                            </tbody></table>
                        </div><!-- end #tabSettings -->
                    
                    
                    
                    <input type="submit" name="save" style="display:none">
                                    </div><!--div class="tab-pane" id="documentPane"-->
            </div><!--div class="sectionBody"-->
        </fieldset>';