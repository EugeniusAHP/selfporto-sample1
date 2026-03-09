<section id="home" class="hero">
        <div class="hero-text">
            <div class="badge">● LIVE MARKET EXPERT</div>
            <h1>Halo, Saya <br><span style="color: var(--neon-cyan);">Koko Wawan</span></h1>
            <p>Seorang Profesional Options Trader. Jangan biarkan market mengontrol emosimu. Pelajari sistem, baca probabilitas, dan eksekusi strategi dengan presisi tinggi bersama saya.</p>
            <a href="#classes" class="btn-neon">Join Private Class</a>
        </div>
        <div class="hero-img-container">
            <div class="ring"></div>
            <div class="hero-img"></div> 
        </div>
    </section>

    <section id="playlist" class="playlist-section">
        <h2 class="section-title">Log Materi & Strategi</h2>
        <p class="section-subtitle">Playlist terurut dari dasar hingga eksekusi market real-time.</p>
        
        <div class="video-grid">
            <?php foreach($data['videos'] as $video) : ?>
                <a href="#" class="video-card">
                    <div class="thumbnail <?= $video['thumb_class']; ?>"></div>
                    <div class="video-info">
                        <h4><?= $video['title']; ?></h4>
                        <p><?= $video['desc']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="classes" class="classes-section">
        <h2 class="section-title">Masih Belum Paham?</h2>
        <p class="section-subtitle">Akselerasi profitmu dengan kurikulum terstruktur di Kelas Privat.</p>
        
        <div class="cards-container">
            <?php foreach($data['classes'] as $class) : ?>
                <div class="class-card <?= $class['card_class']; ?>">
                    <h3 style="color: <?= $class['color']; ?>;"><?= $class['type']; ?></h3>
                    <div class="price"><?= $class['price_text']; ?></div>
                    <ul>
                        <?php foreach($class['features'] as $feature) : ?>
                            <li><?= $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="https://wa.me/6281234567890?text=<?= $class['wa_text']; ?>" target="_blank" class="btn-class">Contact Me</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>