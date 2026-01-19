@extends('layouts.app')

@section('content')
<div>
    {{-- Navbar --}}
    <div class="navbaritem">
        {{-- Kalau punya partial: --}}
        {{-- @include('partials.nav') --}}
    </div>

    {{-- Carousel PPDB --}}
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <a href="{{ route('ppdb') }}">
                        <img src="{{ asset('asset/img/Slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <a href="{{ route('ppdb') }}">
                        <img src="{{ asset('asset/img/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
                    </a>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <a href="{{ route('ppdb') }}">
                        <img src="{{ asset('asset/img/Slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
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

    {{-- Konten 3 (Card) --}}
    <div class="konten-3">
        <section class="container my-5">
            <div class="row justify-content-center g-3">
                <div class="col-md-4">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-book"></i>
                        <div class="card-body">
                            <h3 class="card-title">Qur'ani</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-trophy"></i>
                        <div class="card-body">
                            <h3 class="card-title">Berprestasi</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 text-center">
                        <i class="bi bi-emoji-laughing"></i>
                        <div class="card-body">
                            <h3 class="card-title">Santun</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
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

    {{-- Konten 2 --}}
    <div class="konten-2">
        <div class="text-center">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo">
            <h2>Selamat Datang</h2>
            <h3 style="margin-bottom: 20px;">
                MA Salafiyah Syafi'iyah Proto Kedungwuni - Pekalongan
            </h3>
            <br>
            <a class="tombol" href="{{ route('profil') }}">Lihat Profil</a>
        </div>
    </div>

    {{-- Konten 4 (Program Unggulan) --}}
    <div class="konten-4">
        <section class="section why-us mb-5" data-section="section2">
            <div class="container-progam">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <i class="bi bi-stars"></i>
                            <h2>Program Unggulan</h2>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="tabs">
                            <section class="tabs-content row">
                                <article id="tabs-1" class="col-md-6">
                                    <div class="list-hide">
                                        <h4>Praktik Pembelajaran Lapangan</h4>
                                        <p>
                                            Progam Pengabdian Masyarakat berupa praktik pembelajaran lapangan, dimana para
                                            siswa/i diterjunkan langsung ke masyarakat untuk mengamalkan ilmunya yang sudah
                                            di dapatkan di MAdrasah.
                                        </p>
                                    </div>
                                </article>

                                <article id="tabs-2" class="col-md-6">
                                    <div class="list-hide">
                                        <h4>Program Tahfidzul Qur'an</h4>
                                        <p>
                                            Program Tahfidzul Qur'an adalah progam menghafal Al-qur'an untuk siswa siswinya
                                            dengan metode yang sudah disesuaikan agar siswa siswi bisa menyelesaikan hafalannya
                                            dalam kurun waktu 3 tahun.
                                        </p>
                                    </div>
                                </article>

                                <article id="tabs-3" class="col-md-6">
                                    <div class="list-hide">
                                        <h4>Kultum Agama</h4>
                                        <p>
                                            Progam harian bergilir yang dilakukan siswa siswi Mass Proto setelah melaksanakan
                                            Sholat Dhuha dan sholat dzuhur berjamaah, siswa siswi diminta menyampaikan
                                            kultum/ceramah Agama.
                                        </p>
                                    </div>
                                </article>

                                <article id="tabs-4" class="col-md-6">
                                    <div class="list-hide">
                                        <h4>Tadarus dan Sholat Dhuha Berjamaah</h4>
                                        <p>
                                            Progam Pembiasaan Pagi Hari sebelum Melaksanakan kegiatan pembelajaran berlangsung.
                                        </p>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Konten 5 --}}
    <div class="konten-5">
        <section class="py-5">
            <div class="container text-center">
                <h2>Kenapa Harus MASS Proto Kedungwuni ?</h2>

                <div class="row g-4 mt-4">
                    <div class="col-md-3">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <i class="bi bi-journal"></i>
                                <h5 class="card-title">Kurikulum Berkualitas</h5>
                                <p class="card-text">
                                    Kurikulum disesuaikan dengan perkembangan zaman yang tetap mengedepankan akhlak qurani
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <i class="bi bi-people"></i>
                                <h5 class="card-title">Tenaga Pengajar Berpengalaman</h5>
                                <p class="card-text">
                                    Para Dewan Guru yang berkompeten dan perpengalaman sesuai dengan bidangnya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <i class="bi bi-building"></i>
                                <h5 class="card-title">Fasilitas Modern</h5>
                                <p class="card-text">
                                    Fasilitas belajar yang Modern dan memadai, sehingga menunjang nyamannya kegiatan belajar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow h-100">
                            <div class="card-body">
                                <i class="bi bi-house"></i>
                                <h5 class="card-title">Tersedia Pondok Pesentren</h5>
                                <p class="card-text">
                                    Bekerjasama dengan berbagai pondok pesantren yang ada di sekitar madrasah.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Konten 6 (Testimoni) --}}
    <div class="konten-6">
        <div class="container">
            <i class="bi bi-chat-left-dots"></i>
            <h2 class="text-center">Kata Mereka Tentang MASS Proto Kedungwuni</h2>
            <p class="text-center">
                Berikut adalah pendapat dari alumni, siswa, dan guru tentang pengalaman mereka di MA Salafiyah Syafi'iyah Proto.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card shadow">
                        <div class="testimonial-icon"><i class="bi bi-person"></i></div>
                        <div class="testimonial-name">Ahmad Fauzi</div>
                        <small class="text-muted">Alumni</small>
                        <p class="testimonial-text mt-3">
                            "MA Salafiyah Syafi'iyah memberikan bekal ilmu agama dan pengetahuan yang sangat berarti dalam hidup saya..."
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card shadow">
                        <div class="testimonial-icon"><i class="bi bi-person"></i></div>
                        <div class="testimonial-name">Putri Rahma</div>
                        <small class="text-muted">Siswa</small>
                        <p class="testimonial-text mt-3">
                            "Saya sangat senang belajar di MA Salafiyah Syafi'iyah..."
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card shadow">
                        <div class="testimonial-icon"><i class="bi bi-person"></i></div>
                        <div class="testimonial-name">Ustadzah Siti Maimunah</div>
                        <small class="text-muted">Guru</small>
                        <p class="testimonial-text mt-3">
                            "Mengajar di MA Salafiyah Syafi'iyah adalah pengalaman luar biasa..."
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="testimonial-card shadow">
                        <div class="testimonial-icon"><i class="bi bi-person"></i></div>
                        <div class="testimonial-name">Zainal Abidin</div>
                        <small class="text-muted">Alumni</small>
                        <p class="testimonial-text mt-3">
                            "Di MA Salafiyah Syafi'iyah, saya belajar untuk lebih disiplin dan menghargai waktu..."
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card shadow">
                        <div class="testimonial-icon"><i class="bi bi-person"></i></div>
                        <div class="testimonial-name">Aisyah Fitriani</div>
                        <small class="text-muted">Siswa</small>
                        <p class="testimonial-text mt-3">
                            "Selain ilmu agama, saya mendapatkan pengalaman berharga dalam bidang sains dan teknologi..."
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="testimonial-card shadow">
                        <div class="testimonial-icon"><i class="bi bi-person"></i></div>
                        <div class="testimonial-name">Ustad Ridwan</div>
                        <small class="text-muted">Guru</small>
                        <p class="testimonial-text mt-3">
                            "Saya merasa bangga menjadi bagian dari MA Salafiyah Syafi'iyah..."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Konten 7 (Berita) --}}
    <div class="konten-7">
        <section class="container my-5">
            <h2 class="text-center">Berita Terkini</h2>

            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="card shadow h-100 berita-card">
                        <img src="{{ asset('asset/img/card1.jpg') }}" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <h5 class="card-title">
                                Rangkaian Acara Harlah ke 31, Mass Proto Adakan Doa Bersama...
                            </h5>
                            <p class="card-text">
                                Kedungwuni(11/9/2024), Keluarga Besar Mass Proto adakan doa bersama...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 berita-card">
                        <img src="{{ asset('asset/img/slides1.jpg') }}" class="card-img-top" alt="Berita 2">
                        <div class="card-body">
                            <h5 class="card-title">
                                Presiden RI ke-8 Hadiri Peletakan Batu Pertama Gedung Baru Madrasah.
                            </h5>
                            <p class="card-text">
                                Pekalongan(11/11/2024) Presiden Ke-8 Bersama Menteri Agama RI...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow h-100 berita-card">
                        <img src="{{ asset('asset/img/kushal-medhi-2BoXRdDy0bo-unsplash.jpg') }}" class="card-img-top" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">
                                Pelatihan Multimedia dalam LDKS 2024 mendatangkan pemateri dari stasiun TV ternama.
                            </h5>
                            <p class="card-text">
                                Rangkaian acara Latihan Dasar Kepemimpinan Siswa tahun 2024...
                            </p>
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Kontak (Kritik & Saran) --}}
    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Kritik Dan Saran</h2>
                    </div>
                </div>

                <div class="col-md-6">
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control"
                                        placeholder="Nama"
                                        required
                                    >
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        placeholder="Email"
                                        required
                                    >
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset>
                                    <textarea
                                        name="message"
                                        id="message"
                                        class="form-control"
                                        rows="6"
                                        placeholder="Ketikkan Kritik Dan Saran..."
                                        required
                                    ></textarea>
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset>
                                    <button
                                        type="button"
                                        class="tombol"
                                        data-bs-toggle="modal"
                                        data-bs-target="#confirmationModal"
                                        id="openConfirmModal"
                                    >
                                        Kirim
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d500.2008350272721!2d109.665386!3d-6.967617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7023d54a607323%3A0x8192187ff210c262!2sMA%20Salafiyah%20Syafiiyah%20Proto!5e1!3m2!1sen!2sid!4v1730649558585!5m2!1sen!2sid"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Modal Konfirmasi --}}
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Kritik Dan Saran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Apakah Anda yakin ingin mengirimkan kritik dan saran ini?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-secondary tombol" style="background-color: gray;" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="tombol" id="confirmSubmit">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Back to Top Button --}}
    <button
        id="backToTop"
        class="btn btn-secondary"
        style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;"
        type="button"
    >
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>

    {{-- Footer --}}

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

        // Submit dari modal
        document.getElementById("confirmSubmit").addEventListener("click", function () {
            document.getElementById("contactForm").submit();
        });
    </script>

    {{-- Bootstrap bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
@endpush
