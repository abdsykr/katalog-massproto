@extends('layouts.app')

@section('content')
<div>

    {{-- Navbar --}}
    <div class="navbaritem">
        {{-- @include('partials.nav') --}}
    </div>

    {{-- Carousel Profil / PPDB --}}
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="5000">
                    <a href="{{ route('ppdb') }}">
                        <img
                            src="{{ asset('asset/img/slide-profil3.jpg') }}"
                            class="d-block w-100"
                            alt="Slide Profil 1"
                        >
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <a href="{{ route('ppdb') }}">
                        <img
                            src="{{ asset('asset/img/slide-profil1.jpg') }}"
                            class="d-block w-100"
                            alt="Slide Profil 2"
                        >
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <a href="{{ route('ppdb') }}">
                        <img
                            src="{{ asset('asset/img/slide-profil2.jpg') }}"
                            class="d-block w-100"
                            alt="Slide Profil 3"
                        >
                    </a>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Profil Section --}}
    <section class="konten1-profil text-center">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo">
        <h2>Profil Madrasah</h2>
        <h3>MA Salafiyah Syafi'iyah Proto Kedungwuni - Pekalongan</h3>
    </section>

    {{-- Vision and Mission Section --}}
    <div class="profil-4">
        <div class="konten-visimisi text-center my-5">
            <i class="bi bi-card-checklist"></i>
            <h2>Visi Dan Misi Madrasah</h2>

            <div class="list-hide">
                <h3>Visi</h3>
                <p>
                    "Menjadi lembaga pendidikan yang unggul dalam prestasi akademik dan karakter,
                    berlandaskan nilai-nilai keislaman dan kemandirian."
                </p>
            </div>

            <div class="list-hide">
                <h3>Misi</h3>
                <p>
                    Menyelenggarakan pendidikan yang berbasis pada nilai-nilai keislaman dan akhlakul karimah.<br>
                    Meningkatkan kualitas akademik siswa melalui proses pembelajaran yang efektif dan inovatif.<br>
                    Menanamkan kemandirian dan tanggung jawab melalui kegiatan yang menumbuhkan karakter unggul.<br>
                    Memperkuat kerja sama dengan berbagai pihak untuk mendukung pengembangan siswa.
                </p>
            </div>
        </div>
    </div>

    {{-- Text Profil --}}
    <div class="profil-container">
        <div class="text-profil text-center">
            <i class="bi bi-hourglass"></i>
            <h2>Profil Dan Sejarah Singkat</h2>
            <h4>Madrasah Aliyah Salafiah Syafi'iyah Proto</h4>

            <p>
                <strong>Madrasah Aliyah Salafiah Syafi'iyah Proto</strong>, atau dikenal dengan <strong>Mass Proto</strong>,
                adalah salah satu sekolah atau madrasah yang terletak di Desa Proto, Kecamatan Kedungwuni, Kabupaten Pekalongan.
                Berdiri sejak tahun 1993, Mass Proto telah melahirkan banyak alumni yang luar biasa, baik dalam bidang religi,
                akademis, maupun dunia bisnis.
            </p>

            <p>
                Peserta didik di <strong>MA Salafiah Syafi'iyah Proto</strong> dibekali dengan ilmu pengetahuan, pengalaman
                pengabdian masyarakat, serta etika atau adab yang diajarkan oleh para pendidik yang berkompeten dan profesional.
                Sehingga, lulusan MA Salafiah Syafi'iyah Proto dapat langsung berperan penuh dalam pengabdian masyarakat maupun
                di dunia akademik.
            </p>

            <p>
                MA Salafiah Syafi'iyah Proto didirikan pada tahun 1993 oleh <strong>Kyai Haji Syarif Daud Al-Hafiz</strong>
                di bawah naungan <strong>Yayasan Pendidikan Islam Salafiyah Syafi'iyah</strong>. Oleh karena itu,
                MA Salafiah Syafi'iyah Proto terpadu dengan pondok pesantren. Kyai Haji Syarif Daud Al-Hafiz, yang merupakan seorang
                hafiz Al-Qur'an, telah melahirkan banyak santri penghafal Al-Qur'an. MA Salafiyah Syafi'iyah Proto juga dikenal dengan
                program unggulannya, yaitu <strong>Tahfizul Qur'an</strong>, yang telah menghasilkan berbagai prestasi dalam
                bidang Al-Qur'an seperti MTQ dan MHQ.
            </p>

            <p>
                MA Salafiah Syafi'iyah Proto menawarkan jurusan peminatan yaitu IPA, IPS, dan Agama. Madrasah ini tidak hanya berorientasi
                pada ilmu pengetahuan, tetapi juga pada pengembangan bakat dan minat siswa serta pengabdian kepada masyarakat dalam
                bentuk kegiatan pengabdian lapangan.
            </p>

            <p>
                <strong>Madrasah Qurani</strong> merupakan tagline dan program unggulan madrasah dengan target menciptakan siswa-siswi
                penghafal Al-Qur'an dalam kurun waktu 3 tahun. Program ini menggunakan metode yang telah dirancang secara maksimal
                dan proporsional. MA Salafiah Syafi'iyah Proto juga memberikan ruang tersendiri bagi siswa untuk mengembangkan
                bakat dan minat mereka melalui berbagai kegiatan ekstrakurikuler.
            </p>
        </div>
    </div>

    {{-- Video Profil --}}
    <section class="video-container">
        <iframe
            class="video-profil"
            src="https://www.youtube.com/embed/V6yOpqU1_0U?controls=0"
            title="YouTube video player"
            allowfullscreen
        ></iframe>

        <div>
            <h2>Tonton Video Profil</h2>
            <h4>MA Salafiyah Syafiiyah Proto</h4>
        </div>
    </section>

    {{-- Sosial Media --}}
    <div class="profil-5">
        <div class="kontak-kami text-center my-5">
            <h2>Kunjungi Sosial Media Kami</h2>

            <div class="sosmed">
                <div class="card">
                    <a href="https://www.tiktok.com" target="_blank" rel="noopener" aria-label="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                </div>

                <div class="card">
                    <a href="https://www.youtube.com" target="_blank" rel="noopener" aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>

                <div class="card">
                    <a href="https://www.facebook.com" target="_blank" rel="noopener" aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>

                <div class="card">
                    <a href="https://www.instagram.com" target="_blank" rel="noopener" aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Back to Top Button --}}
    <button
        id="backToTop"
        class="btn btn-secondary"
        type="button"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;"
    >
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>

    {{-- Footer --}}
    {{-- Jika sudah pakai partial footer modern: --}}
    {{-- @include('partials.footer') --}}

    {{-- Kalau masih pakai versi lama --}}
    <div class="copyright text-center">
        <p>Ahmad Abdul Syukur, 102230011 Pemrogaman Web I © 2024</p>
    </div>

</div>
@endsection

@push('scripts')
    {{-- Back to top --}}
    <script>
        window.onscroll = function () {
            const button = document.getElementById("backToTop");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };

        document.getElementById("backToTop").onclick = function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        };
    </script>

    {{-- Bootstrap Bundle (kalau belum dipanggil di layout) --}}
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
@endpush
