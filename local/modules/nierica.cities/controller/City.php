<?php
namespace Nierica\Cities\Controller;

use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Loader;
use Bitrix\Main\Application;

class City extends Controller
{
    public function getDefaultPreFilters(): array
    {
        return [
            new ActionFilter\HttpMethod(
                [ActionFilter\HttpMethod::METHOD_POST]
            ),
        ];
    }
    protected function prepareParams(): bool
    {
        return parent::prepareParams();
    }

    public function updateCityNameAction($id)
    {
        Loader::includeModule('iblock');
        $request = Application::getInstance()->getContext()->getRequest();
        $vals=$request->getPostList()->toArray();
        $result=\Bitrix\Iblock\Elements\ElementCitiesTable::update($id, ['NAME' => $vals['name']]);
        if($result){
            return 'Город c ID '.$id.' теперь называется '.$vals['name'];
        }else{
            return 'Ошибка обновления города с ID '.$id;
        }
    }
}