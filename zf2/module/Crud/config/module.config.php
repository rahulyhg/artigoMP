<?php

return array(
    'router' => array(
        'routes' => array(
            'crud-home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/crud',
                    'defaults' => array(
                        'controller' => 'Crud\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        		'crud-insert' => array(
        				'type' => 'Zend\Mvc\Router\Http\Literal',
        				'options' => array(
        						'route'    => '/crud/insert',
        						'defaults' => array(
        								'controller' => 'Crud\Controller\Index',
        								'action'     => 'insert',
        						),
        				),
        		),
        		'crud-edit' => array(
        				'type' => 'Zend\Mvc\Router\Http\Literal',
        				'options' => array(
        						'route'    => '/crud/edit',
        						'defaults' => array(
        								'controller' => 'Crud\Controller\Index',
        								'action'     => 'edit',
        						),
        				),
        		),
        		'crud-delete' => array(
        				'type' => 'Zend\Mvc\Router\Http\Literal',
        				'options' => array(
        						'route'    => '/crud/delete',
        						'defaults' => array(
        								'controller' => 'Crud\Controller\Index',
        								'action'     => 'delete',
        						),
        				),
        		),
        ),
    ),

	'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
		
    'controllers' => array(
        'invokables' => array(
            'Crud\Controller\Index' => 'Crud\Controller\IndexController'
        ),
    ),
		
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'crud/index/index' => __DIR__ . '/../view/crud/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
