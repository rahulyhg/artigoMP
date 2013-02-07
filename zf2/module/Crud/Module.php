<?php

namespace Crud;

use Crud\Model\TabelaTable;


class Module {

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
            'factories' => array(
                'Crud\Model\TabelaService' => function($service) {
                    $dbAdapter = $service->get('Zend\Db\Adapter\Adapter');
                    $table = new TabelaTable($dbAdapter);
                    $service = new Model\TabelaService($table);
                    return $service;
                },
                
            ),
        );
    }



}
