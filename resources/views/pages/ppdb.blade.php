@extends('layouts.app')

@section('title', 'PPDB')

@section('content')
<div>

    {{-- Navbar (kalau navbar sudah di layout/partial, bagian ini bisa dihapus) --}}
    <div class="navbaritem">
        {{-- @include('partials.nav') --}}
    </div>

    {{-- Carousel --}}
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="5000">
                    <a href="{{ route('ppdb') }}">
                        <img
                            src="{{ asset('asset/img/Slide1.jpg') }}"
                            class="d-block w-100"
                            alt="Slide 1"
                        >
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <a href="{{ route('ppdb') }}">
                        <img
                            src="{{ asset('asset/img/slide2.jpg') }}"
                            class="d-block w-100"
                            alt="Slide 2"
                        >
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <a href="{{ route('ppdb') }}">
                        <img
                            src="{{ asset('asset/img/Slide3.jpg') }}"
                            class="d-block w-100"
                            alt="Slide 3"
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

    {{-- Konten 2: CTA --}}
    <div class="konten-2">
        <div class="text-center">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo">
            <h2>Penerimaan Peserta Didik Baru Tahun 2024/2025</h2>
            <h3 style="margin-bottom: 20px;">
                MA Salafiyah Syafi'iyah Proto Kedungwuni - Pekalongan
            </h3>
            <br>
            <a class="tombol" href="{{ route('register') }}">Daftar</a>
        </div>
    </div>

    {{-- Konten 3: Nilai utama --}}
    <div class="konten-ppdb">
        <section class="container my-5">
            <div class="row justify-content-center g-3">

                <div class="col-md-3">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-book"></i>
                        <div class="card-body">
                            <h3 class="card-title">Qur'ani</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-trophy"></i>
                        <div class="card-body">
                            <h3 class="card-title">Berprestasi</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-emoji-laughing"></i>
                        <div class="card-body">
                            <h3 class="card-title">Santun</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-tree"></i>
                        <div class="card-body">
                            <h3 class="card-title">Peduli Lingkungan</h3>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    {{-- Alur Pendaftaran --}}
    <div class="konten-alur">
        <section class="container my-5">
            <h2 class="text-center mb-4">Alur Pendaftaran</h2>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">1. Pendaftaran</h5>
                            <p class="card-text">
                                Calon siswa mengisi formulir pendaftaran secara online melalui website resmi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">2. Verifikasi</h5>
                            <p class="card-text">
                                Tim panitia akan memverifikasi data pendaftaran yang telah diajukan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">3. Pengumuman</h5>
                            <p class="card-text">
                                Pengumuman hasil seleksi akan disampaikan melalui website dan email.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Jalur Pendaftaran --}}
    <div class="konten-jalur">
        <section class="container my-5">
            <h2 class="text-center mb-4">Jalur Pendaftaran</h2>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Pilihan Jalur</th>
                            <th scope="col">Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Jalur Reguler</strong></td>
                            <td>Pendaftaran untuk semua calon siswa tanpa syarat khusus.</td>
                        </tr>
                        <tr>
                            <td><strong>Jalur Prestasi</strong></td>
                            <td>Pendaftaran bagi siswa yang memiliki prestasi akademik atau non-akademik.</td>
                        </tr>
                        <tr>
                            <td><strong>Jalur Beasiswa</strong></td>
                            <td>Pendaftaran bagi siswa yang membutuhkan bantuan finansial.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</div>
@endsection

@push('scripts')
    {{-- Tawk.to (cukup sekali di halaman ini, jangan dobel) --}}
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = "https://embed.tawk.to/672adf964304e3196addbaa6/1ibvnipl9";
            s1.charset = "UTF-8";
            s1.setAttribute("crossorigin", "*");
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
@endpush
