<?php
/**
 * Created by PhpStorm.
 * User: krona
 * Date: 4/25/14
 * Time: 3:03 PM
 */

namespace Arilas\ScreenLeap\Service;


use Arilas\ScreenLeap\ScreenLeap;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ScreenLeapFactory implements FactoryInterface
{
    protected $instance;

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if (is_null($this->instance)) {
            $this->createInstance($serviceLocator);
        }

        return $this->instance;
    }

    protected function createInstance(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        $this->instance = new ScreenLeap($config['arilas']['screenleap']);
    }
}