<?php
require_once 'core/Controller.php';

class HomeController extends Controller {
    public function index() {
        // Panggil model
        $videoModel = $this->model('VideoModel');
        $classModel = $this->model('ClassModel');

        // Ambil data
        $data['videos'] = $videoModel->getVideos();
        $data['classes'] = $classModel->getClasses();
        $data['title'] = 'Koko Wawan - Professional Options Trader';

        // Tampilkan View dengan data yang dikirim
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}