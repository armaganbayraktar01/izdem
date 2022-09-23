<?php

//view altındaki index açılacak

$menus_navbar = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'tachometer'
    ],
    'users' => [
        'title' => 'Personel',
        'icon' => 'user',
        'submenu' => [
            'list-user' => [
                'title' => 'Personel Listesi',
                'icon' => 'user'
            ],
            'add-user' => [
                'title' => 'Personel Ekle',
                'icon' => 'user'
            ],
            'edit-user' => [
                'title' => 'Personel Güncelle',
                'icon' => ''
            ]              
        ]
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog'
    ]
];

require app_view('index');