<?php
//admin/route1 eğer yoksa admin ana sayfasına yönlendir

if (!route(1)){
    $route[1] = 'index';
}

// cpp altındaki helper
if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
 }

 $menus_sidebar = [
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
            // 'add-user' => 'Personel Ekle',
            // 'edit-user' => 'Personel Güncelle'
        ]
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog'
    ]
];

//view altındaki admin açılacak

require admin_controller(route(1));