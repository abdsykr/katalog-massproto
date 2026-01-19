@extends('layouts.app')

@section('content')

<div class="navbaritem">

</div>
<div class="container">
<div class="form-container">
<h2 class="text-center mb-5">Formulir Pendaftaran Calon Peserta Didik Baru<br/>Ma Salafiyah Syafi'iyah Proto Kedungwuni<br/>Tahun Ajaran 2024/2025</h2>
<form>
<!-- Nama, Alamat, Email -->
<div class="form-row">
<div class="col-md-6 form-group">
<label for="namaDepan">Nama Depan</label>
<input class="form-control" id="namaDepan" placeholder="Nama Depan" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="namaBelakang">Nama Belakang</label>
<input class="form-control" id="namaBelakang" placeholder="Nama Belakang" type="text"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="alamat">Alamat</label>
<input class="form-control" id="alamat" placeholder="Alamat" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="email">E-mail</label>
<input class="form-control" id="email" placeholder="Email" type="email"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="noHP">No HP</label>
<input class="form-control" id="noHP" placeholder="Nomor HP" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="agama">Agama</label>
<select class="form-control" id="agama">
<option>---Silahkan Pilih---</option>
<option>Islam</option>
<option>Hindu</option>
<option>Budha</option>
</select>
</div>
</div>
<!-- Pekerjaan dan Jenis Kelamin -->
<div class="form-row">
<div class="col-md-6 form-group">
<label for="pekerjaan">Pekerjaan</label>
<select class="form-control" id="pekerjaan">
<option>---Silahkan Pilih---</option>
<option>Swasta</option>
<option>PNS</option>
<option>TNI</option>
<option>Polri</option>
<option>Dokter</option>
<option>Programmer</option>
<option>DPR</option>
<option>Guru</option>
<option>Dosen</option>
</select>
</div>
<div class="col-md-6 form-group">
<label for="jenisKelamin">Jenis Kelamin</label>
<select class="form-control" id="jenisKelamin">
<option>---Silahkan Pilih---</option>
<option>Laki-laki</option>
<option>Perempuan</option>
</select>
</div>
</div>
<!-- Media Sosial -->
<div class="form-row">
<div class="col-md-6 form-group">
<label for="nik">NIK / No KTP</label>
<input class="form-control" id="nik" placeholder="NIK atau No KTP" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="facebook">URL Facebook</label>
<input class="form-control" id="facebook" placeholder="URL Facebook" type="url"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="website">URL Website</label>
<input class="form-control" id="website" placeholder="URL Website" type="url"/>
</div>
<div class="col-md-6 form-group">
<label for="instagram">URL Instagram</label>
<input class="form-control" id="instagram" placeholder="URL Instagram" type="url"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="tiktok">URL TikTok</label>
<input class="form-control" id="tiktok" placeholder="URL TikTok" type="url"/>
</div>
</div>
<!-- Informasi Orang Tua -->
<h3 class="mt-4">Informasi Orang Tua</h3>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="namaAyah">Nama Ayah</label>
<input class="form-control" id="namaAyah" placeholder="Nama Ayah" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="namaIbu">Nama Ibu</label>
<input class="form-control" id="namaIbu" placeholder="Nama Ibu" type="text"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="alamatAyah">Alamat Ayah</label>
<input class="form-control" id="alamatAyah" placeholder="Alamat Ayah" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="alamatIbu">Alamat Ibu</label>
<input class="form-control" id="alamatIbu" placeholder="Alamat Ibu" type="text"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="pekerjaanAyah">Pekerjaan Ayah</label>
<select class="form-control" id="pekerjaanAyah">
<option>---Silahkan Pilih---</option>
<option>Swasta</option>
<option>PNS</option>
<option>TNI</option>
<option>Polri</option>
<option>Dokter</option>
<option>Programmer</option>
<option>DPR</option>
<option>Guru</option>
<option>Dosen</option>
</select>
</div>
<div class="col-md-6 form-group">
<label for="pekerjaanIbu">Pekerjaan Ibu</label>
<select class="form-control" id="pekerjaanIbu">
<option>---Silahkan Pilih---</option>
<option>Swasta</option>
<option>PNS</option>
<option>TNI</option>
<option>Polri</option>
<option>Dokter</option>
<option>Programmer</option>
<option>DPR</option>
<option>Guru</option>
<option>Dosen</option>
</select>
</div>
</div>
<!-- Kontak Orang Tua dan Penghasilan -->
<div class="form-row">
<div class="col-md-6 form-group">
<label for="penghasilanAyah">Penghasilan Ayah</label>
<input class="form-control" id="penghasilanAyah" placeholder="Penghasilan Ayah" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="penghasilanIbu">Penghasilan Ibu</label>
<input class="form-control" id="penghasilanIbu" placeholder="Penghasilan Ibu" type="text"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="noHpAyah">No HP Ayah</label>
<input class="form-control" id="noHpAyah" placeholder="Nomor HP Ayah" type="text"/>
</div>
<div class="col-md-6 form-group">
<label for="noHpIbu">No HP Ibu</label>
<input class="form-control" id="noHpIbu" placeholder="Nomor HP Ibu" type="text"/>
</div>
</div>
<!-- Username, Password -->
<div class="form-row">
<div class="col-md-6 form-group">
<label for="username">Username</label>
<input class="form-control" id="username" placeholder="Username" type="text"/>
</div>
</div>
<div class="form-row">
<div class="col-md-6 form-group">
<label for="password">Password</label>
<input class="form-control" id="password" placeholder="Password" type="password"/>
</div>
<div class="col-md-6 form-group">
<label for="retypePassword">Re-type Password</label>
<input class="form-control" id="retypePassword" placeholder="Ulangi Password" type="password"/>
</div>
</div>
<!-- Submit Button -->
<div class="form-row">
<div class="col-md-12">
<button class="tombol" data-bs-target="#confirmationModal" data-bs-toggle="modal" type="button">SUBMIT</button>
</div>
</div>
</form>
</div>
</div>
<div aria-hidden="true" aria-labelledby="confirmationModalLabel" class="modal fade" id="confirmationModal" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="confirmationModalLabel">Konfirmasi Pendaftaran</h5>
<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
</div>
<div class="modal-body">
                Apakah Anda yakin ingin mengirimkan pendaftaran ini?
            </div>
<div class="modal-footer">
<button class="btn-secondary tombol" data-bs-dismiss="modal" style="background-color: gray;" type="button">Batal</button>
<button class="tombol" id="confirmSubmit" type="button">Kirim</button>
</div>
</div>
</div>
</div>
 Back to Top Button 
<button class="btn btn-secondary" id="backToTop" style="display: none; position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
<i class="bi bi-arrow-up-circle-fill"></i>
</button>
 Akhir Konten 7 
Awal footer

<div class="copyright">
<p>Ahmad Abdul Syukur, 102230011 Pemrogaman Web I © 2024</p>
</div>
Akhir footer



@endsection

@push('scripts')
<script>
        // Menampilkan tombol ketika scroll ke bawah
        window.onscroll = function() {
            const button = document.getElementById("backToTop");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };
    
        // Fungsi untuk scroll ke atas
        document.getElementById("backToTop").onclick = function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        };
    </script><script crossorigin="anonymous" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
