@extends('layouts.app')

@section('title', 'Kurikulum & Peminatan')

@section('content')
<div>

    {{-- Navbar (hapus jika navbar sudah di layout/partials.nav) --}}
    <div class="navbaritem">
        {{-- @include('partials.nav') --}}
    </div>

    {{-- Header --}}
    <section class="konten1-pem text-center">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo">
        <h2>Kurikulum Dan Peminatan</h2>
        <h3>MA Salafiyah Syafi'iyah Proto Kedungwuni - Pekalongan</h3>
    </section>

    {{-- Curriculum Section --}}
    <div class="konten-pem2">
        <section class="curriculum-section text-center my-5">
            <h2>Kurikulum</h2>
            <p>
                Kurikulum yang diterapkan di MA Salafiyah Syafi'iyah Proto Kedungwuni mengacu pada standar pendidikan nasional
                dan disesuaikan dengan kebutuhan siswa. Kami menawarkan berbagai program untuk mendukung pengembangan akademis
                dan karakter siswa.
            </p>

            <div class="row justify-content-center g-3">
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kurikulum Umum</h5>
                            <p class="card-text">
                                Mencakup pelajaran wajib seperti Bahasa Indonesia, Bahasa Inggris, Matematika, dan Ilmu Pengetahuan Alam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kurikulum Peminatan</h5>
                            <p class="card-text">
                                Setiap peminatan memiliki kurikulum yang disesuaikan untuk mendalami bidang tertentu, seperti MIPA, IPS, dan Agama.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Kurikulum Madrasah</h5>
                            <p class="card-text">
                                Kurikulum yang dikembangkan sesuai dengan Identitas Madrasah, seperti Jam Tambahan Tahfiz,
                                Mata Pelajaran Kitab Kuning, dan lain-lain.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Pilihan Peminatan --}}
    <section class="konten1-profil text-center my-5">
        <h2>Pilihan Peminatan</h2>
        <h3>MA Salafiyah Syafi'iyah Proto Kedungwuni - Pekalongan</h3>
    </section>

    <div class="konten-pem1">
        <section class="container my-5">
            <div class="row justify-content-center g-3">

                <div class="peminatan col-md-4">
                    <a href="#ipa" class="d-block">
                        <div class="card shadow h-100 text-center">
                            <i class="bi bi-superscript"></i>
                            <div class="card-body">
                                <h3 class="card-title">MIPA</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peminatan col-md-4">
                    <a href="#ips" class="d-block">
                        <div class="card shadow h-100 text-center">
                            <i class="bi bi-globe-asia-australia"></i>
                            <div class="card-body">
                                <h3 class="card-title">IPS</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="peminatan col-md-4">
                    <a href="#agama" class="d-block">
                        <div class="card shadow h-100 text-center">
                            <i class="bi bi-book-half"></i>
                            <div class="card-body">
                                <h3 class="card-title">AGAMA</h3>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </section>
    </div>

    {{-- Fokus Pembelajaran Peminatan --}}
    <div class="profil-4" id="fokus-peminatan">
        <div class="konten-visimisi text-center my-5">
            <section class="section why-us mb-5" data-section="section2">
                <div class="container-progam-pem">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <i class="bi bi-journals"></i>
                                <h2>Fokus Pembelajaran Peminatan</h2>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div id="tabs">
                                <section class="tabs-content-pem row g-3 justify-content-center">

                                    <article class="col-md-4" id="ipa">
                                        <div class="list-hide-pem">
                                            <h2>Matematika dan Ilmu Pengetahuan Alam</h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">Pelajaran Fisika</li>
                                                <li class="list-group-item">Pelajaran Kimia</li>
                                                <li class="list-group-item">Pelajaran Biologi</li>
                                                <li class="list-group-item">Pelajaran Matematika Lanjutan</li>
                                            </ul>
                                        </div>
                                    </article>

                                    <article class="col-md-4" id="ips">
                                        <div class="list-hide-pem">
                                            <h2>Ilmu Pengetahuan Sosial</h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">Pelajaran Ekonomi</li>
                                                <li class="list-group-item">Pelajaran Geografi</li>
                                                <li class="list-group-item">Pelajaran Sosiologi</li>
                                                <li class="list-group-item">Pelajaran Sejarah</li>
                                            </ul>
                                        </div>
                                    </article>

                                    <article class="col-md-4" id="agama">
                                        <div class="list-hide-pem">
                                            <h2>Ilmu Keagamaan</h2>
                                            <ul class="list-group">
                                                <li class="list-group-item">Pelajaran Al-Qur'an</li>
                                                <li class="list-group-item">Pelajaran Hadis</li>
                                                <li class="list-group-item">Pelajaran Ushul Fiqh</li>
                                                <li class="list-group-item">Pelajaran Nahwu Shorof</li>
                                            </ul>
                                        </div>
                                    </article>

                                </section>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    {{-- Berita Terkini --}}
    <div class="konten-7">
        <section class="container my-5">
            <h2 class="text-center">Berita Terkini</h2>

            <div class="row justify-content-center g-4">

                <div class="col-md-4">
                    <div class="card shadow h-100 berita-card">
                        <img src="{{ asset('asset/img/slide1.jpg') }}" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <h5 class="card-title">PPDB 25/26 Pihak Madrasah Membuka Kuota Jurusan Agama Lebih Banyak</h5>
                            <p class="card-text">
                                Penerimaan Peserta Didik Baru tahun 2025 kuota setiap peminatan berbeda dengan tahun-tahun sebelumnya...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 berita-card">
                        <img src="{{ asset('asset/img/berita-kurikulum.jpg') }}" class="card-img-top" alt="Berita 2">
                        <div class="card-body">
                            <h5 class="card-title">Akhir Tahun Ajaran Baru 130 siswa siswi Berhasil Selesaikan Hafalan 30 Juz Al-Qur'an</h5>
                            <p class="card-text">
                                Pekalongan(11/11/2024) Sebanyak 130 Siswa Kelas 12 Berhasil Khatamkan Hafalan Al-Qur'an...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 berita-card">
                        <img src="{{ asset('asset/img/berita-kurikulum2.jpg') }}" class="card-img-top" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">10 Siswa MASS PROTO Menjadi Delegasi KSM Jawa Tengah Di Tingkat Nasional</h5>
                            <p class="card-text">
                                Sebanyak 10 Siswa MASS Proto berhasil menangkan KSM tingkat Jateng dan akan kembali bertanding di tingkat nasional...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

</div>
@endsection
