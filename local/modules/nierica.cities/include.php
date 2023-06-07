<?php
$module_folder = \Bitrix\Main\Application::getDocumentRoot() . '/local/modules/nierica.cities';
\Bitrix\Main\Loader::registerNamespace('Nierica\Cities\Controller', $module_folder . '/controller');