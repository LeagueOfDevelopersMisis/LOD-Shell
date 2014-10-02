<?php

return array(
    'actions' => array(
        'index' => 'index'
    ),
    'module_includes' => array(
        'merge' => array(
            'module_views' => array(
                'content' => array(
                    'authorized_mode' => false,
                    'path' => 'index/main'
                )
            )
        ),
        'replace' => array(
            'title' => 'Заголовок главной страницы'
        )
    )
);