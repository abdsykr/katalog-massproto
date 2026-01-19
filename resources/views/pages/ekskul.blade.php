@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')
<div>

    {{-- Navbar (hapus jika navbar sudah di layout/partials.nav) --}}
    <div class="navbaritem">
        {{-- @include('partials.nav') --}}
    </div>

    {{-- Header --}}
    <section class="konten1-pem text-center">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo">
        <h2>Ekstrakurikuler</h2>
        <h3>MA Salafiyah Syafi'iyah Proto Kedungwuni - Pekalongan</h3>
    </section>

    {{-- Jenis Ekstrakurikuler --}}
    <div class="konten-ekskul">
        <section class="py-5">
            <div class="container text-center">
                <h2>Jenis Ekstrakurikuler Yang Ada Di MASS Proto Kedungwuni</h2>

                <div class="row g-4 mt-4 justify-content-center">

                    <div class="col-md-3">
                        <a href="#akademik">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <i class="bi bi-book"></i>
                                    <h5 class="card-title">Ekstrakurikuler Akademik</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#olahraga">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <i class="bi bi-dribbble"></i>
                                    <h5 class="card-title">Ekstrakurikuler Olahraga</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#organisasi">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <i class="bi bi-people"></i>
                                    <h5 class="card-title">Ekstrakurikuler Organisasi</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3">
                        <a href="#seni">
                            <div class="card shadow h-100">
                                <div class="card-body">
                                    <i class="bi bi-brush"></i>
                                    <h5 class="card-title">Ekstrakurikuler<br>Seni</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>

    {{-- Prestasi --}}
    <section class="ekskul">
        <div class="container">
            <div class="text-center">
                <i class="bi bi-trophy"></i>
                <h2 class="card-title">Prestasi Ekstrakurikuler</h2>
                <p>Prestasi yang Berhasil Diraih Selama Bulan <strong>Oktober 2024</strong></p>
                <a href="#">Lihat Selengkapnya...</a>
            </div>

            <div class="row justify-content-center g-4 mt-3">
                <div class="col-md-4">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/pramuka.jpg') }}" class="card-img-top" alt="Prestasi 1">
                        <div class="card-body">
                            <h5 class="card-title">Juara Umum 2 GTPP 2024</h5>
                            <p class="card-text">
                                Ekstrakurikuler Pramuka Mass Proto berhasil meraih Juara Umum 2 setelah memenangkan 3 cabang lomba
                                (Juara 1 PBB, Juara 2 Dance Komando, dan Juara 1 Pionering).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/lkbb.jpg') }}" class="card-img-top" alt="Prestasi 2">
                        <div class="card-body">
                            <h5 class="card-title">Juara Umum 3 LKBB Nasional 2024</h5>
                            <p class="card-text">
                                Paskibra Mass Proto (Pasukan Bahurekso) raih Juara Umum 3 setelah mendapatkan 3 kategori juara
                                (Best Danton 3, Best Varfor 2, Best PBB 3).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/mhq.jpg') }}" class="card-img-top" alt="Prestasi 3">
                        <div class="card-body">
                            <h5 class="card-title">Juara 1 MHQ Kategori 5 Juz</h5>
                            <p class="card-text">
                                Siswa kami mendapatkan Juara 1 dalam festival Qur'an tingkat nasional cabang lomba MHQ
                                yang diadakan di Riau.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Galeri --}}
    <section class="galeri">
        <div class="container">
            <div class="text-galeri text-center mb-4">
                <i class="bi bi-camera"></i>
                <h2 class="card-title">Galeri Kegiatan</h2>
                <p>Momen-momen berharga dari kegiatan ekstrakurikuler.</p>
                <a href="#">Lihat Galeri Lainnya.</a>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/ekskul-paskib.jpg') }}" class="img-fluid rounded" alt="Foto Kegiatan 1">
                        <div class="image-overlay">Pengibaran Bendera HUT RI ke-79</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/pramuka.jpg') }}" class="img-fluid rounded" alt="Foto Kegiatan 2">
                        <div class="image-overlay">Lomba GTPP 2024</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="image-container">
                        <img src="{{ asset('asset/img/paskib.jpg') }}" class="img-fluid rounded" alt="Foto Kegiatan 3">
                        <div class="image-overlay">LKBB Dinporapar 2024</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =======================
         Detail Ekstrakurikuler
    ======================== --}}

    {{-- Akademik --}}
    <section class="ekskul" id="akademik">
        <div class="container">
            <div class="text-center">
                <i class="bi bi-book"></i>
                <h2 class="card-title">Ekstrakurikuler Akademik</h2>
                <p>Kegiatan ekstrakurikuler yang berfokus pada pengembangan akademik siswa.</p>
            </div>

            <div class="row justify-content-center g-4 mt-3">
                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/club sains.jpg') }}" class="card-img-top" alt="Club Sains">
                        <div class="card-body">
                            <h5 class="card-title">Club Sains</h5>
                            <p class="card-text">
                                Club Sains bertujuan meningkatkan minat dan pemahaman siswa terhadap ilmu pengetahuan.
                                Kegiatan meliputi eksperimen, penelitian, dan lomba sains.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/bahasa.jpg') }}" class="card-img-top" alt="Club Bahasa">
                        <div class="card-body">
                            <h5 class="card-title">Club Bahasa</h5>
                            <p class="card-text">
                                Club Bahasa mengajarkan siswa tentang berbagai bahasa dan budaya. Kegiatan termasuk diskusi,
                                permainan bahasa, dan lomba pidato.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/codding.jpg') }}" class="card-img-top" alt="Kelas Pemrograman">
                        <div class="card-body">
                            <h5 class="card-title">Kelas Pemrograman</h5>
                            <p class="card-text">
                                Pelatihan berbagai bahasa pemrograman. Siswa belajar membuat aplikasi dan memahami logika pemrograman.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/jurnalistik.jpg') }}" class="card-img-top" alt="Jurnalistik dan Multimedia">
                        <div class="card-body">
                            <h5 class="card-title">Jurnalistik dan Multimedia</h5>
                            <p class="card-text">
                                Mengajarkan dasar jurnalistik, penulisan berita, dan penggunaan media digital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Olahraga --}}
    <section class="ekskul" id="olahraga">
        <div class="container">
            <div class="text-center">
                <i class="bi bi-dribbble"></i>
                <h2 class="card-title">Ekstrakurikuler Olahraga</h2>
                <p>Kegiatan ekstrakurikuler yang berfokus pada pengembangan fisik dan kebugaran siswa.</p>
            </div>

            <div class="row justify-content-center g-4 mt-3">
                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/sepak bola.jpg') }}" class="card-img-top" alt="Sepak Bola dan Futsal">
                        <div class="card-body">
                            <h5 class="card-title">Sepak Bola dan Futsal</h5>
                            <p class="card-text">
                                Melatih keterampilan sepak bola dan futsal. Siswa belajar teknik dasar, strategi permainan, dan disiplin olahraga.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/volly.jpg') }}" class="card-img-top" alt="Bola Volly">
                        <div class="card-body">
                            <h5 class="card-title">Bola Volly</h5>
                            <p class="card-text">
                                Mengajarkan teknik dasar dan taktik permainan. Siswa berlatih kerja sama tim dan keterampilan komunikasi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/takraw.jpg') }}" class="card-img-top" alt="Takraw">
                        <div class="card-body">
                            <h5 class="card-title">Takraw</h5>
                            <p class="card-text">
                                Mengajarkan permainan tradisional ini, meningkatkan keterampilan fisik dan kerja sama.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/atletik.jpg') }}" class="card-img-top" alt="Atletik">
                        <div class="card-body">
                            <h5 class="card-title">Atletik</h5>
                            <p class="card-text">
                                Mencakup lari, lompat, dan lempar. Siswa dilatih untuk mencapai prestasi dalam kompetisi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/badminton.jpg') }}" class="card-img-top" alt="Badminton">
                        <div class="card-body">
                            <h5 class="card-title">Badminton</h5>
                            <p class="card-text">
                                Mengajarkan teknik dasar permainan, strategi, dan pentingnya kebugaran fisik.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/renang.jpg') }}" class="card-img-top" alt="Renang">
                        <div class="card-body">
                            <h5 class="card-title">Renang</h5>
                            <p class="card-text">
                                Mengajarkan teknik berenang yang benar, meningkatkan stamina, dan mempromosikan gaya hidup sehat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/silat.jpg') }}" class="card-img-top" alt="Pencak Silat">
                        <div class="card-body">
                            <h5 class="card-title">Pencak Silat</h5>
                            <p class="card-text">
                                Seni bela diri tradisional untuk meningkatkan disiplin, kepercayaan diri, dan keterampilan fisik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Organisasi --}}
    <section class="ekskul" id="organisasi">
        <div class="container">
            <div class="text-center">
                <i class="bi bi-people"></i>
                <h2 class="card-title">Ekstrakurikuler Organisasi</h2>
                <p>Kegiatan ekstrakurikuler yang berfokus pada pengembangan kepemimpinan dan kerja sama.</p>
            </div>

            <div class="row justify-content-center g-4 mt-3">
                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/osis.jpg') }}" class="card-img-top" alt="OSIS">
                        <div class="card-body">
                            <h5 class="card-title">OSIS</h5>
                            <p class="card-text">
                                Organisasi Siswa Intra Sekolah (OSIS) berperan dalam kegiatan sekolah dan pengembangan kepemimpinan siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/pmr.jpg') }}" class="card-img-top" alt="PMR">
                        <div class="card-body">
                            <h5 class="card-title">Palang Merah Remaja</h5>
                            <p class="card-text">
                                PMR bertugas memberikan bantuan kemanusiaan dan pelatihan pertolongan pertama kepada siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/ekskul-paskib.jpg') }}" class="card-img-top" alt="PKS dan Paskibra">
                        <div class="card-body">
                            <h5 class="card-title">PKS dan Paskibra</h5>
                            <p class="card-text">
                                Mengajarkan kedisiplinan, kerja sama, dan keterampilan baris-berbaris kepada siswa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/pramuka2.jpg') }}" class="card-img-top" alt="Pramuka">
                        <div class="card-body">
                            <h5 class="card-title">Pramuka</h5>
                            <p class="card-text">
                                Mengajarkan nilai kepemimpinan, keberanian, dan keterampilan bertahan hidup di alam terbuka.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Seni --}}
    <section class="ekskul" id="seni">
        <div class="container">
            <div class="text-center">
                <i class="bi bi-brush"></i>
                <h2 class="card-title">Ekstrakurikuler Seni</h2>
                <p>Kegiatan ekstrakurikuler yang berfokus pada pengembangan kreativitas dan ekspresi seni siswa.</p>
            </div>

            <div class="row justify-content-center g-4 mt-3">
                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/kaligrafi.jpg') }}" class="card-img-top" alt="Kaligrafi">
                        <div class="card-body">
                            <h5 class="card-title">Kaligrafi</h5>
                            <p class="card-text">
                                Seni menulis indah yang membantu siswa mengembangkan keterampilan artistik dan kesabaran.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/mhq.jpg') }}" class="card-img-top" alt="Qiro'ati">
                        <div class="card-body">
                            <h5 class="card-title">Qiro'ati</h5>
                            <p class="card-text">
                                Fokus pada pembelajaran membaca Al-Qur'an dengan baik dan benar serta meningkatkan kecintaan terhadap Al-Qur'an.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/teater.jpg') }}" class="card-img-top" alt="Teater">
                        <div class="card-body">
                            <h5 class="card-title">Teater</h5>
                            <p class="card-text">
                                Kesempatan bagi siswa untuk mengekspresikan diri melalui seni peran dan pertunjukan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/musik.jpg') }}" class="card-img-top" alt="Musik">
                        <div class="card-body">
                            <h5 class="card-title">Musik</h5>
                            <p class="card-text">
                                Mengajarkan berbagai alat musik dan teori musik serta kesempatan tampil dalam pertunjukan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/seni rupa.jpg') }}" class="card-img-top" alt="Seni Rupa">
                        <div class="card-body">
                            <h5 class="card-title">Seni Rupa</h5>
                            <p class="card-text">
                                Mengekspresikan kreativitas melalui lukisan, patung, dan kerajinan tangan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 ekskul-card">
                        <img src="{{ asset('asset/img/tari.jpg') }}" class="card-img-top" alt="Tari">
                        <div class="card-body">
                            <h5 class="card-title">Tari</h5>
                            <p class="card-text">
                                Mengajarkan berbagai jenis tarian, meningkatkan keterampilan gerak, dan kesempatan tampil di acara sekolah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
