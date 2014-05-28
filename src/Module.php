<?php
/**
 * Created by PhpStorm.
 * User: krona
 * Date: 5/28/14
 * Time: 3:14 PM
 */

namespace Arilas\ScreenLeap;


use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;

class Module
{
    public function getConfig()
    {
        return require_once __DIR__ . '/Resources/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
} 