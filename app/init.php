<?php
// oturum yönetimi
session_start();
ob_start();

//class yönetimi classes klasöründeki classları otomatik yükledik
function loadClasses($className){
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}

spl_autoload_register('loadClasses');

// veritabanı bağlantısı
$config = require __DIR__ . '/config.php';

try {
    $db = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
} catch (PDOException $th) {
    die($th->getMessage());
}

//helper klasöründeki tüm php dosyalarını çek ve değişkene ata

foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile;
}