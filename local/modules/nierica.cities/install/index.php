<?php
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Application;

IncludeModuleLangFile(__FILE__);

class nierica_cities extends CModule
{
    var $MODULE_ID = "nierica.cities";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $errors;

    function __construct()
    {
        //$arModuleVersion = array();
        $this->MODULE_VERSION = "1.0.0";
        $this->MODULE_VERSION_DATE = "06.06.2023";
        $this->MODULE_NAME = Loc::getMessage("NIERICA_CITIES_NAME");
        $this->MODULE_DESCRIPTION = Loc::getMessage("NIERICA_CITIES_DESCRIPTION");

        $this->PARTNER_NAME = Loc::getMessage("NIERICA_CITIES_PARTNER_NAME");
        $this->PARTNER_URI = Loc::getMessage("NIERICA_CITIES_PARTNER_URI");
    }

    //Определяем место размещения модуля
    public function GetPath($notDocumentRoot=false)
    {
        if($notDocumentRoot)
            return str_ireplace(Application::getDocumentRoot(),'',dirname(__DIR__));
        else
            return dirname(__DIR__);
    }

    //Проверяем что система поддерживает D7
    public function isVersionD7()
    {
        return CheckVersion(\Bitrix\Main\ModuleManager::getVersion('main'), '21.400.0');
    }

    function DoInstall()
    {
        $this->InstallDB();
        $this->InstallFiles();
        RegisterModule($this->MODULE_ID);
        return true;
    }

    function DoUninstall()
    {
        $this->UnInstallDB();
        $this->UnInstallFiles();
        UnRegisterModule($this->MODULE_ID);
        return true;
    }
    function InstallDB()
    {

    }

    function UnInstallDB()
    {

    }

    function InstallFiles()
    {
        /*if (\Bitrix\Main\IO\Directory::isDirectoryExists($path = $this->GetPath() . '/admin'))
        {

            if ($dir = opendir($path))
            {
                while (false !== $item = readdir($dir))
                {
                    if (in_array($item,$this->exclusionAdminFiles))
                        continue;
                    file_put_contents($_SERVER['DOCUMENT_ROOT'].'/bitrix/admin/'.$this->MODULE_ID.'_'.$item,
                        '<'.'? require("'.$this->GetPath(false).'/admin/'.$item.'");?'.'>');
                }
                closedir($dir);
            }

        }

        return true;*/
    }

    function UnInstallFiles()
    {
        /* if (\Bitrix\Main\IO\Directory::isDirectoryExists($path = $this->GetPath() . '/admin')) {
             DeleteDirFiles($_SERVER["DOCUMENT_ROOT"] . $this->GetPath() . '/install/admin/', $_SERVER["DOCUMENT_ROOT"] . '/bitrix/admin');
             if ($dir = opendir($path)) {
                 while (false !== $item = readdir($dir)) {
                     if (in_array($item, $this->exclusionAdminFiles))
                         continue;
                     \Bitrix\Main\IO\File::deleteFile($_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/' . $this->MODULE_ID . '_' . $item);
                 }
                 closedir($dir);
             }
         }

         return true;*/
    }
}