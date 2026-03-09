<?php

class ClassModel {
    public function getClasses() {
        return [
            [
                'type' => 'Beginner',
                'card_class' => 'card-beginner',
                'color' => 'var(--neon-green)',
                'price_text' => 'Mulai dari Nol',
                'features' => ['Pengenalan Instrumen Options', 'Setup Akun & Platform', 'Membaca Arah Tren Dasar', 'Money Management 101'],
                'wa_text' => 'halo%20koko%20wawan%2C%20saya%20ingin%20ikut%20kelas%20beginner%20nih.%20Boleh%20tanya-tanya%20dulu%3F'
            ],
            [
                'type' => 'Intermediate',
                'card_class' => 'card-inter',
                'color' => 'var(--neon-cyan)',
                'price_text' => 'Level Lanjutan',
                'features' => ['Analisis Teknikal Mendalam', 'Price Action & Chart Pattern', 'Strategi Trading Harian', 'Manajemen Risiko Ketat'],
                'wa_text' => 'halo%20koko%20wawan%2C%20saya%20ingin%20ikut%20kelas%20intermediate%20nih.%20Boleh%20tanya-tanya%20dulu%3F'
            ],
            [
                'type' => 'Advanced',
                'card_class' => 'card-adv',
                'color' => 'var(--neon-red)',
                'price_text' => 'Pro Eksekusi',
                'features' => ['Strategi Options Kompleks', 'Membaca Manipulasi Market', 'Psikologi Trading Kelas Berat', '1-on-1 Live Mentoring'],
                'wa_text' => 'halo%20koko%20wawan%2C%20saya%20ingin%20ikut%20kelas%20advanced%20nih.%20Boleh%20tanya-tanya%20dulu%3F'
            ]
        ];
    }
}