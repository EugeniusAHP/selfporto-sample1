<?php

class Controller {
    // Fungsi untuk memanggil view dan mengirimkan data
    public function view($view, $data = []) {
        require_once 'views/' . $view . '.php';
    }

    // Fungsi untuk instansiasi model
    public function model($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }
}