<?php

return array(
    'modules' => array(
        '404' => 'Err404',
        'index' => 'Index'
    ),
    'module_options' => array(
        'module_path' => '/module'
    ),
    'vendor_options' => array(
        'vendor_path' => '/vendor',
        'projects' => array(
            'qemy' => array(
                'base_path' => '/qemy/qemyframework',
                'library_path' => '/qemy/qemyframework/library'
            )
        )
    ),
    'views_options' => array(
        'views_path' => '/vendor/qemy/qemyframework/resources/layout',
        'common_includes' => array(
            'title' => 'Заголовок страницы',
            'meta' => array(
                'charset' => '<meta http-equiv="content-type" content="text/html; charset=utf-8">'
            ),
            'script' => array(
                'jquery',
                'common'
            ),
            'css' => array(
                'common'
            ),
            'views' => array(
                'head' => array(
                    'authorized_mode' => false,
                    'path' => 'common/head/head'
                ),
                'footer' => array(
                    'authorized_mode' => false,
                    'path' => 'common/footer/footer'
                )
            )
        )
    ),
    'resource_options' => array(
        'path' => '/application/resources/global.php'
    ),
    'db_options' => require Q_PATH.'/application/config/db.config.php'
);