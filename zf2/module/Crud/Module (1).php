<?php

namespace Crud;

use Crud\Model\TabelaService;
//use Crud\Model\TabelaTable;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;


class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig() {
    	
    	return array(
    		"factories"	=> array(
    			"Crud\Model\TabelaService" => function($service) {
    				$dbAdapter = $service->get("Zend\Db\Adapter\Adapter");
    				$tabelaTable = new Model\TabelaTable($dbAdapter);
    				$tabelaService = new Model\TabelaService($tabelaTable);
    				
    				return $tabelaService;
    			}
    		)	
    	);
    }
}
