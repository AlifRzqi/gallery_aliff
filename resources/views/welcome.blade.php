<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMKN 4 Bogor</title>

    <!-- Fonts & Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background: #1B2B4B;
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        section {
            padding: 50px 0;
        }

        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('{{ asset('images/kepsek.jpg') }}') center/cover;
            color: white;
            padding: 100px 0;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        footer {
            background: #1B2B4B;
            color: white;
            padding: 30px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1>SMKN 4 Bogor</h1>
            <p class="mt-3">Unggul dalam Teknologi, Berkarakter, dan Berwawasan Lingkungan</p>
            <a href="{{ url('/program-keahlian') }}" class="btn btn-warning mt-3">Lihat Program Keahlian</a>
        </div>
    </section>

    <!-- Sambutan Kepala Sekolah -->
    <section class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Sambutan Kepala Sekolah</h2>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('images/kepala-sekolah.jpg') }}" class="img-fluid rounded" alt="Kepala Sekolah">
                </div>
                <div class="col-md-8">
                    <p>Assalamu'alaikum Wr. Wb.</p>
                    <p>Puji syukur kita panjatkan kepada Allah SWT yang telah memberikan rahmat dan hidayah-Nya sehingga website SMKN 4 Bogor dapat hadir di hadapan Anda semua.</p>
                    <p>SMKN 4 Bogor berkomitmen untuk menghasilkan lulusan yang kompeten, berkarakter, dan siap bersaing di dunia kerja maupun wirausaha.</p>
                    <p class="mt-3">
                        <strong>Drs. Mulya Murprihartono, M.Si.</strong><br>
                        Kepala SMKN 4 Bogor
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Keahlian -->
    <section>
        <div class="container">
            <h2 class="text-center mb-4">Program Keahlian</h2>
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
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-primary">Selengkapnya</a>
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
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-primary">Selengkapnya</a>
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
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-primary">Selengkapnya</a>
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
                            <a href="{{ url('/program-keahlian') }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda & Informasi -->
    <section class="bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Agenda & Informasi</h2>
            <div class="row">
                <!-- Agenda -->
                <div class="col-md-6">
                    <h4>Agenda Sekolah</h4>
                    @foreach($agendas as $agenda)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5>{{ $agenda->judul }}</h5>
                            <p class="text-muted">
                                <i class="fas fa-calendar"></i> 
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Informasi -->
                <div class="col-md-6">
                    <h4>Informasi Terkini</h4>
                    @foreach($informasi as $info)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5>{{ $info->judul }}</h5>
                            <p>{{ Str::limit(strip_tags($info->isi), 100) }}</p>
                            <small class="text-muted">
                                <i class="fas fa-clock"></i> 
                                {{ $info->created_at->format('d M Y') }}
                            </small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section>
        <div class="container">
            <h2 class="text-center mb-4">Galeri Kegiatan</h2>
            <div class="row">
                @foreach($latestPhotos as $foto)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ Storage::url($foto['file']) }}" alt="{{ $foto['judul'] }}">
                        <div class="card-body">
                            <h6>{{ $foto['judul'] }}</h6>
                            <small class="text-muted">
                                {{ $foto['tanggal']->format('d M Y') }}
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('galeri') }}" class="btn btn-primary">Lihat Semua Galeri</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>