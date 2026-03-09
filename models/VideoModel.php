<?php

class VideoModel {
    public function getVideos() {
        return [
            [
                'thumb_class' => 'thumb-1',
                'title' => '#1 - Mindset Options Trader',
                'desc' => 'Fondasi psikologi sebelum masuk ke market sungguhan.'
            ],
            [
                'thumb_class' => 'thumb-2',
                'title' => '#2 - Membaca Chart & Candlestick',
                'desc' => 'Cara mengetahui arah tren tanpa menggunakan indikator ribet.'
            ],
            [
                'thumb_class' => 'thumb-3',
                'title' => '#3 - Setup Entry & Exit Point',
                'desc' => 'Strategi sniper: Kapan harus buy, kapan harus hold.'
            ]
        ];
    }
}