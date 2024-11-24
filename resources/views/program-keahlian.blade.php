@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="mb-4">Program Keahlian</h1>
        <p class="mt-3 mb-4">Pilihan Jurusan di SMKN 4 Bogor</p>
        <a href="#program" class="btn btn-warning">Lihat Program</a>
    </div>
</section>

<!-- Program Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kompetensi Keahlian</h2>
        <div class="row">
            <!-- PPLG -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/program/pplg.png') }}" alt="PPLG">
                    <div class="card-body">
                        <h5 class="card-title">Pengembangan Perangkat Lunak dan Gim (PPLG)</h5>
                        <p class="card-text">
                            Program keahlian yang mempelajari:
                            <ul>
                                <li>Pemrograman Web & Mobile</li>
                                <li>Pengembangan Game</li>
                                <li>Basis Data</li>
                                <li>UI/UX Design</li>
                            </ul>
                        </p>
                        <p class="text-muted">
                            <i class="fas fa-users"></i> Kapasitas: 144 Siswa<br>
                            <i class="fas fa-clock"></i> Masa Studi: 3 Tahun
                        </p>
                    </div>
                </div>
            </div>

            <!-- TJKT -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/program/tjkt.png') }}" alt="TJKT">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Jaringan Komputer dan Telekomunikasi (TJKT)</h5>
                        <p class="card-text">
                            Program keahlian yang mempelajari:
                            <ul>
                                <li>Jaringan Komputer</li>
                                <li>Administrasi Server</li>
                                <li>Keamanan Jaringan</li>
                                <li>Sistem Telekomunikasi</li>
                            </ul>
                        </p>
                        <p class="text-muted">
                            <i class="fas fa-users"></i> Kapasitas: 144 Siswa<br>
                            <i class="fas fa-clock"></i> Masa Studi: 3 Tahun
                        </p>
                    </div>
                </div>
            </div>

            <!-- Teknik Pengelasan -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/program/tp.jpeg') }}" alt="Teknik Pengelasan">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Pengelasan</h5>
                        <p class="card-text">
                            Program keahlian yang mempelajari:
                            <ul>
                                <li>Teknik Pengelasan SMAW</li>
                                <li>Teknik Pengelasan GMAW</li>
                                <li>Teknik Pengelasan GTAW</li>
                                <li>Fabrikasi Logam</li>
                            </ul>
                        </p>
                        <p class="text-muted">
                            <i class="fas fa-users"></i> Kapasitas: 72 Siswa<br>
                            <i class="fas fa-clock"></i> Masa Studi: 3 Tahun
                        </p>
                    </div>
                </div>
            </div>

            <!-- Teknik Otomotif -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/program/to.png') }}" alt="Teknik Otomotif">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Otomotif</h5>
                        <p class="card-text">
                            Program keahlian yang mempelajari:
                            <ul>
                                <li>Perawatan Mesin Kendaraan</li>
                                <li>Sistem Kelistrikan Otomotif</li>
                                <li>Chasis dan Transmisi</li>
                                <li>Diagnosa Kendaraan</li>
                            </ul>
                        </p>
                        <p class="text-muted">
                            <i class="fas fa-users"></i> Kapasitas: 72 Siswa<br>
                            <i class="fas fa-clock"></i> Masa Studi: 3 Tahun
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .hero-section {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                    url('{{ asset('images/kepsek.jpg') }}') center/cover;
        color: white;
        padding: 100px 0;
        margin-bottom: 0;
    }

    .hero-section h1 {
        font-size: 2.5rem;
        font-weight: 600;
    }

    .hero-section p {
        font-size: 1.2rem;
        font-weight: 300;
    }

    .hero-section .btn {
        padding: 10px 30px;
        font-weight: 500;
    }

    .card {
        border: 1px solid #ddd;
        margin-bottom: 20px;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-text ul {
        padding-left: 20px;
        margin-top: 10px;
    }

    .card-text li {
        margin-bottom: 5px;
    }
</style>
@endsection 