<!DOCTYPE html>
<html lang="ms">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f8f7f0">
        <meta name="description" content="Kuih Koci Pulut Hitam Santan Banjir di Putrajaya dan Desa Pinggiran Putra. Penghantaran melalui Lalamove atau Grab, atau ambil sendiri.">

        <title>Koci Gen Z — Pulut Hitam Santan Banjir</title>

        <!-- @fonts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <a class="skip-link" href="#main">Terus ke kandungan</a>

        <div class="announcement">
            <p>Kuih Koci Pulut Hitam Santan Banjir <span aria-hidden="true">✳</span> Putrajaya &amp; Desa Pinggiran Putra</p>
        </div>

        <header class="site-header">
            <div class="site-shell header-inner">
                <a class="brand" href="#atas" aria-label="Koci Gen Z, halaman utama">
                    <span class="brand-mark" aria-hidden="true">k.</span>
                    <span class="brand-name">koci<span>genz</span></span>
                </a>

                <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
                    <span class="sr-only">Buka atau tutup menu</span>
                    <span class="menu-toggle-line"></span>
                    <span class="menu-toggle-line"></span>
                </button>

                <nav class="primary-navigation" id="primary-navigation" aria-label="Navigasi utama">
                    <a href="#galeri">Galeri</a>
                    <a href="#cerita">Tentang koci</a>
                    <a href="#penghantaran">Kawasan &amp; penghantaran</a>
                    <a class="nav-cta" href="#penghantaran">Cara dapatkan <span aria-hidden="true">↗</span></a>
                </nav>
            </div>
        </header>

        <main id="main">
            <section class="hero site-shell" id="atas" aria-labelledby="hero-title">
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> Resipi tradisi, nikmat sampai banjir</p>
                    <h1 id="hero-title">Pulut hitam.<br><span>Santan banjir.</span></h1>
                    <p class="hero-description">Kenyalnya pulut hitam, manisnya inti kelapa dan kuah santan yang melimpah. Setiap biji dibalut kemas dengan daun pisang — tengok sendiri dalam galeri kami.</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="#galeri">Lihat galeri <span aria-hidden="true">↗</span></a>
                        <a class="text-link" href="#penghantaran">Kawasan kami <span aria-hidden="true">↓</span></a>
                    </div>
                    <div class="hero-proof">
                        <div class="avatar-stack" aria-hidden="true">
                            <span>📍</span><span>♡</span><span>✳</span>
                        </div>
                        <p><strong>Putrajaya</strong> &amp; Desa Pinggiran Putra<br><span>Penghantaran atau ambil sendiri</span></p>
                    </div>
                    <span class="hero-sparkle sparkle-one" aria-hidden="true">✳</span>
                </div>

                <div class="hero-visual" id="galeri">
                    <div
                        class="hero-image-wrap"
                        data-carousel
                        role="region"
                        aria-roledescription="karusel"
                        aria-label="Galeri gambar Kuih Koci Gen Z"
                        tabindex="0"
                    >
                        <div class="carousel-track">
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-01.jpg') }}" alt="Kuih koci berbalut daun pisang di dalam bekas hidangan" width="768" height="1024" fetchpriority="high">
                                <figcaption>Kuih koci berbalut daun pisang</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-02.jpg') }}" alt="Kuih koci disusun di atas daun pisang dengan kuah santan" width="768" height="1024" loading="lazy">
                                <figcaption>Kuah santan melimpah, memang puas</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-03.jpg') }}" alt="Kuih koci pulut hitam dibelah, menampakkan inti kelapa" width="768" height="1024" loading="lazy">
                                <figcaption>Pulut hitam lembut, inti kelapa di dalam</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-04.jpg') }}" alt="Bekas Kuih Koci Gen Z dengan pelekat jenama" width="768" height="1024" loading="lazy">
                                <figcaption>Dibungkus kemas untuk dibawa pulang</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-05.jpg') }}" alt="Beberapa bekas kuih koci sedia untuk pelanggan" width="1024" height="768" loading="lazy">
                                <figcaption>Sedia untuk dinikmati bersama</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-06.jpg') }}" alt="Gerai Koci Gen Z di bazar malam" width="1024" height="768" loading="lazy">
                                <figcaption>Singgah di gerai Koci Gen Z</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-07.jpg') }}" alt="Gerai jualan Koci Gen Z dengan kuih koci dan sepanduk jenama" width="1024" height="768" loading="lazy">
                                <figcaption>Jumpa kami di gerai</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-08.jpg') }}" alt="Penjual menyediakan pesanan kuih koci di gerai" width="768" height="1024" loading="lazy">
                                <figcaption>Disediakan dan dibungkus untuk anda</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-09.jpg') }}" alt="Pelanggan menikmati kuih koci di bazar malam" width="768" height="1024" loading="lazy">
                                <figcaption>Kuih koci di bazar malam</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-10.jpg') }}" alt="Pelanggan bergambar di gerai Koci Gen Z" width="1024" height="768" loading="lazy">
                                <figcaption>Terima kasih singgah di gerai kami</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-11.jpg') }}" alt="Dulang berisi kuih koci yang dibungkus satu demi satu" width="1024" height="768" loading="lazy">
                                <figcaption>Dibalut satu demi satu dengan daun pisang</figcaption>
                            </figure>
                            <figure class="carousel-slide">
                                <img src="{{ asset('images/koci-carousel/koci-12.jpg') }}" alt="Dulang besar penuh dengan kuih koci berbalut daun pisang" width="1024" height="768" loading="lazy">
                                <figcaption>Kuih koci untuk dikongsi ramai-ramai</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-caption">
                            <span class="carousel-caption-mark" aria-hidden="true">✳</span>
                            <span class="carousel-caption-text">Kuih koci berbalut daun pisang</span>
                        </div>
                        <button class="carousel-control carousel-previous" type="button" aria-label="Gambar sebelumnya">
                            <span aria-hidden="true">←</span>
                        </button>
                        <button class="carousel-control carousel-next" type="button" aria-label="Gambar seterusnya">
                            <span aria-hidden="true">→</span>
                        </button>
                    </div>
                    <div class="carousel-footer">
                        <p class="carousel-counter" aria-live="polite" aria-atomic="true">1 / 12</p>
                        <div class="carousel-dots" aria-label="Pilih gambar">
                            <button type="button" data-carousel-index="0" aria-label="Papar gambar 1" aria-current="true"></button>
                            <button type="button" data-carousel-index="1" aria-label="Papar gambar 2"></button>
                            <button type="button" data-carousel-index="2" aria-label="Papar gambar 3"></button>
                            <button type="button" data-carousel-index="3" aria-label="Papar gambar 4"></button>
                            <button type="button" data-carousel-index="4" aria-label="Papar gambar 5"></button>
                            <button type="button" data-carousel-index="5" aria-label="Papar gambar 6"></button>
                            <button type="button" data-carousel-index="6" aria-label="Papar gambar 7"></button>
                            <button type="button" data-carousel-index="7" aria-label="Papar gambar 8"></button>
                            <button type="button" data-carousel-index="8" aria-label="Papar gambar 9"></button>
                            <button type="button" data-carousel-index="9" aria-label="Papar gambar 10"></button>
                            <button type="button" data-carousel-index="10" aria-label="Papar gambar 11"></button>
                            <button type="button" data-carousel-index="11" aria-label="Papar gambar 12"></button>
                        </div>
                    </div>
                    <span class="hero-sparkle sparkle-two" aria-hidden="true">✳</span>
                    <span class="hero-sparkle sparkle-three" aria-hidden="true">✳</span>
                </div>
                <a class="scroll-cue" href="#cerita"><span aria-hidden="true">↓</span> Teruskan lihat</a>
            </section>

            <div class="ticker" aria-label="Pulut hitam, santan melimpah, dibungkus dengan daun pisang">
                <div class="ticker-track" aria-hidden="true">
                    <span>Pulut hitam</span><b>✳</b><span>Santan melimpah</span><b>✳</b><span>Dibalut daun pisang</span><b>✳</b>
                    <span>Pulut hitam</span><b>✳</b><span>Santan melimpah</span><b>✳</b><span>Dibalut daun pisang</span><b>✳</b>
                </div>
            </div>

            <section class="story section-pad" id="cerita" aria-labelledby="story-title">
                <div class="site-shell story-grid">
                    <div class="story-photo-wrap">
                        <img
                            src="{{ asset('images/koci-carousel/koci-03.jpg') }}"
                            alt="Kuih koci pulut hitam dibelah, dengan inti kelapa dan kuah santan"
                            width="768"
                            height="1024"
                            loading="lazy"
                        >
                        <span class="story-art-note">Penuh<br>inti ♡</span>
                    </div>
                    <div class="story-copy">
                        <p class="eyebrow"><span class="eyebrow-dot"></span> Kecil-kecil, penuh rasa</p>
                        <h2 id="story-title">Lembut di luar.<br><span>Santan banjir.</span></h2>
                        <p>Pulut hitam yang kenyal, inti kelapa manis di tengah, kemudian disiram kuah santan yang melimpah. Dibungkus satu per satu dengan daun pisang — klasik, tapi memang susah nak berhenti makan.</p>
                        <a class="text-link" href="#penghantaran">Cari cara untuk dapatkan <span aria-hidden="true">↗</span></a>
                    </div>
                </div>
            </section>

            <section class="menu-section section-pad delivery-section" id="penghantaran" aria-labelledby="delivery-title">
                <div class="site-shell">
                    <div class="section-heading">
                        <div>
                            <p class="eyebrow"><span class="eyebrow-dot"></span> Dari kami terus ke anda</p>
                            <h2 id="delivery-title">Sekitar mana?<br><span>Kami hantar.</span></h2>
                        </div>
                        <p>Tempah untuk ambil sendiri<br>atau pilih penghantaran.</p>
                    </div>

                    <div class="delivery-grid">
                        <article class="delivery-card">
                            <span class="delivery-icon" aria-hidden="true">⌖</span>
                            <p class="delivery-label">Kawasan kami</p>
                            <h3>Putrajaya</h3>
                            <p>Desa Pinggiran Putra dan kawasan sekitar.</p>
                        </article>
                        <article class="delivery-card">
                            <span class="delivery-icon" aria-hidden="true">↗</span>
                            <p class="delivery-label">Penghantaran</p>
                            <h3>Lalamove<br>atau Grab</h3>
                            <p>Pilih penghantaran yang paling sesuai untuk anda.</p>
                        </article>
                        <article class="delivery-card">
                            <span class="delivery-icon" aria-hidden="true">♡</span>
                            <p class="delivery-label">Nak ambil sendiri?</p>
                            <h3>Self pickup</h3>
                            <p>Ambil pesanan sendiri di kawasan Putrajaya / Desa Pinggiran Putra.</p>
                        </article>
                    </div>
                    <p class="menu-footnote"><span aria-hidden="true">✳</span> Atur penghantaran atau ambil sendiri di Putrajaya / Desa Pinggiran Putra.</p>
                    <div class="delivery-order-action">
                        <a
                            class="button button-primary"
                            href="https://wa.me/60198684492?text=Nama%3A%0AAlamat%20Penuh%3A%0ANombor%20Telefon%3A%0AHari%3A%0ATarikh%3A%0AMasa%3A%0AOrder%3A"
                            target="_blank"
                            rel="noopener noreferrer"
                        >Tempah melalui WhatsApp
                            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1 11.6a8.1 8.1 0 0 1-12 7.1L3 20l1.3-4.9a8.1 8.1 0 1 1 15.8-3.5Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.2 7.8c.2-.4.5-.5.8-.5h.6c.2 0 .4.1.5.4l.8 1.8c.1.2.1.4-.1.6l-.6.7c-.2.2-.2.4-.1.6.5 1 1.3 1.8 2.3 2.3.2.1.4.1.6-.1l.7-.8c.2-.2.4-.2.6-.1l1.8.8c.3.1.4.3.4.5v.6c0 .3-.1.6-.5.8-.5.3-1.2.5-2 .3-1.1-.3-2.5-1-3.8-2.3-1.3-1.3-2-2.7-2.3-3.8-.2-.8 0-1.5.3-2Z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="site-shell footer-inner">
                <a class="brand footer-brand" href="#atas" aria-label="Koci Gen Z, kembali ke atas">
                    <span class="brand-mark" aria-hidden="true">k.</span>
                    <span class="brand-name">koci<span>genz</span></span>
                </a>
                <p>Tradisi lama, santan banjir, vibe kita.</p>
                <a class="footer-top" href="#atas">Kembali ke atas <span aria-hidden="true">↑</span></a>
            </div>
            <div class="site-shell footer-bottom">
                <span>© {{ date('Y') }} Koci Gen Z. Dibuat dengan <span aria-label="kasih sayang">♡</span> di Malaysia.</span>
                <span>Pulut hitam. Santan banjir.</span>
            </div>
        </footer>
    </body>
</html>
