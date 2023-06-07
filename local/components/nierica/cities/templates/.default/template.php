<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CJSCore::Init(array("jquery"));
?>
<div class="col-wrap">
    <div class="column get-cities-block">
        <div class="get-cities-button res-wrap">
            <button id="get_cities">Получить список городов</button>
        </div>
        <div class="get-cities-list">
        </div>
    </div>
    <div class="column update-city-block">
        <div class="post-city-form res-wrap">
            <form method="post" action="/cities_by_routes/" enctype="multipart/form-data">
                <input type="hidden" name="sessid" value="<?echo bitrix_sessid();?>">
                <div>
                    <label for="id">ID города</label>
                    <input type="text" name="id" id="id">
                </div>
                <div>
                    <label for="name">Новое название города</label>
                    <input type="text" name="name" id="name">
                </div>
                <input type="submit" value="Обновить">
            </form>
        </div>
        <div class="post-city-res">
        </div>
    </div>
</div>