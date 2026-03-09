<?php

// Memanggil controller utama
require_once 'controllers/HomeController.php';

// Menjalankan aplikasi
$app = new HomeController();
$app->index();

?>

