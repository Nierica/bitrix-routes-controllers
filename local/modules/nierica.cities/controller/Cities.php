<?php
namespace Nierica\Cities\Controller;

use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Loader;

class Cities extends Controller
{
    public function getDefaultPreFilters(): array
    {
        return [
            new ActionFilter\HttpMethod(
                [ActionFilter\HttpMethod::METHOD_GET]
            ),
        ];
    }

    public function getCityListAction()
    {
        Loader::includeModule('iblock');
        $cityList = \Bitrix\Iblock\Elements\ElementCitiesTable::getList([
            'select' => ['ID', 'NAME'],
            'filter' => [],
        ])->fetchAll();
        return $cityList;
    }
}