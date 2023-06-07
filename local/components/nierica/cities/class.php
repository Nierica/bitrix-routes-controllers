<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

class NiericaCities extends CBitrixComponent{

    protected function listKeysSignedParameters(): array
    {
        return [
            'CACHE_TIME',
            'CACHE_TYPE',
        ];
    }

    public function onPrepareComponentParams($arParams)
    {
        if(!isset($arParams["CACHE_TIME"]))
            $arParams["CACHE_TIME"] = 3600;

        return parent::onPrepareComponentParams($arParams);
    }

    public function executeComponent() {
        $this->includeComponentTemplate();
    }
}
