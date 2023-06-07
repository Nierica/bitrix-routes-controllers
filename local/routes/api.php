<?php
use Bitrix\Main\Routing\RoutingConfigurator;
use Bitrix\Main\Loader;

Loader::IncludeModule("nierica.cities");

return function (RoutingConfigurator $routes) {
    $routes->get('/cities',  [\Nierica\Cities\Controller\Cities::class, 'getCityList']);
    $routes->post('/city/{id}', [\Nierica\Cities\Controller\City::class, 'updateCityName']);
};