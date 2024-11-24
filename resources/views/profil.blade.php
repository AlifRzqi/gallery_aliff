@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="mb-4">Tentang SMKN 4 Bogor</h1>
        <p class="mt-3 mb-4">Sekolah Menengah Kejuruan Negeri 4 Bogor</p>
        <a href="#sejarah" class="btn btn-warning">Lihat Sejarah</a>
    </div>
</section>

<!-- Sejarah Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Sejarah SMKN 4 Bogor</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/upacara.jpg') }}" alt="SMKN 4 Bogor" class="img-fluid rounded mb-4">
            </div>
            <div class="col-md-6">
                <p class="lead">Merupakan sekolah kejuruan berbasis Teknologi Informasi dan Komunikasi.</p>
                <p>Sekolah ini didirikan dan dirintis pada tahun 2008 kemudian dibuka pada tahun 2009 yang saat ini terakreditasi A. Terletak di Jalan Raya Tajur Kp. Buntar, Muarasari, Bogor.</p>
                
                <div class="row mt-4">
                    <div class="col-6 col-md-3 text-center mb-3">
                        <h4>54</h4>
                        <small>Staff Pengajar</small>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-3">
                        <h4>22</h4>
                        <small>Staff TU</small>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-3">
                        <h4>12.724</h4>
                        <small>Luas Area (m²)</small>
                    </div>
                    <div class="col-6 col-md-3 text-center mb-3">
                        <h4>A</h4>
                        <small>Akreditasi</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi Misi Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Visi & Misi</h2>
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Visi</h3>
                        <p class="card-text">Terwujudnya SMK Pusat Keunggulan melalui terciptanya pelajar pancasila yang berbasis teknologi, berwawasan lingkungan dan berkewirausahaan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">Misi</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2">• Mewujudkan karakter pelajar pancasila beriman dan bertaqwa kepada Tuhan Yang Maha Esa dan berakhlak mulia.</li>
                            <li class="mb-2">• Mengembangkan pembelajaran dan pengelolaan sekolah berbasis Teknologi Informasi dan Komunikasi.</li>
                            <li class="mb-2">• Mengembangkan sekolah yang berwawasan Adiwiyata Mandiri.</li>
                            <li class="mb-2">• Mengembangkan usaha dalam berbagai bidang secara optimal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kepala Sekolah Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kepala Sekolah</h2>
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('images/kepala-sekolah.jpg') }}" alt="Kepala Sekolah" class="img-fluid rounded mb-4">
            </div>
            <div class="col-md-8">
                <h4>Drs. Mulya Murprihartono, M.Si.</h4>
                <p class="text-muted">Kepala Sekolah Ke-3, Juli 2020 - sekarang</p>
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Sejak satu tahun lalu SMKN 4 Kota Bogor dipimpin oleh seseorang yang membawa warna baru, tahun pertama sejak dilantik, tepatnya pada tanggal 10 Juli 2020, inovasi dan kebijakan-kebijakan baru pun mulai dirancang.</p>
                    </div>
                </div>
                <p>Bukan tanpa kesulitan, penuh tantangan tapi beliau meyakinkan untuk selalu optimis pada harapan dengan bersinergi mewujudkan visi misi SMKN 4 Bogor ditengah kesulitan pandemi ini.</p>
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
</style>
@endsection 