@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="dashboard-header mb-5">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="text-navy fw-bold mb-3">Dashboard</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-5">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-icon bg-primary-soft">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">{{ App\Models\Post::count() }}</h3>
                    <p class="stat-label">Total Post</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-icon bg-success-soft">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">{{ App\Models\Post::where('status', 'published')->count() }}</h3>
                    <p class="stat-label">Published</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-icon bg-warning-soft">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">{{ App\Models\Post::where('status', 'draft')->count() }}</h3>
                    <p class="stat-label">Draft</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card">
                <div class="stat-icon bg-info-soft">
                    <i class="fas fa-images"></i>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">{{ App\Models\Foto::count() }}</h3>
                    <p class="stat-label">Total Foto</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts & Photos -->
    <div class="row">
        <!-- Recent Posts -->
        <div class="col-lg-8 mb-4">
            <div class="content-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Post Terbaru</h5>
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus me-2"></i>Tambah Post
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\Post::latest()->take(5)->get() as $post)
                                <tr>
                                    <td>{{ $post->judul }}</td>
                                    <td>
                                        @php
                                            $kategoriNama = [
                                                1 => 'Informasi',
                                                2 => 'Agenda',
                                                3 => 'Galeri'
                                            ][$post->kategori_id] ?? 'Tidak ada kategori';

                                            $kategoriClass = [
                                                1 => 'info',
                                                2 => 'warning',
                                                3 => 'success'
                                            ][$post->kategori_id] ?? 'secondary';
                                        @endphp
                                        <span class="badge bg-{{ $kategoriClass }}-soft">{{ $kategoriNama }}</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'warning' }}-soft">
                                            {{ $post->status }}
                                        </span>
                                    </td>
                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Photos -->
        <div class="col-lg-4 mb-4">
            <div class="content-card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Foto Terbaru</h5>
                        <a href="{{ route('admin.foto.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-upload me-2"></i>Upload
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach(App\Models\Foto::latest()->take(6)->get() as $foto)
                        <div class="col-4">
                            <div class="gallery-item">
                                <a href="{{ Storage::url($foto->file) }}" data-lightbox="recent-photos">
                                    <img src="{{ Storage::url($foto->file) }}" 
                                         alt="{{ $foto->judul }}"
                                         class="img-fluid rounded">
                                    <div class="gallery-overlay">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --navy-primary: #1B2B4B;
    --navy-secondary: #2A4270;
    --navy-light: #3B5998;
    --accent-gold: #D4AF37;
    --text-light: #E8EBF2;
}

/* Dashboard Header */
.dashboard-header h1 {
    color: var(--navy-primary);
    font-size: 2.5rem;
}

.breadcrumb-item a {
    color: var(--navy-light);
    text-decoration: none;
}

/* Stat Cards */
.stat-card {
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.bg-primary-soft { background: rgba(27, 43, 75, 0.1); color: var(--navy-primary); }
.bg-success-soft { background: rgba(28, 200, 138, 0.1); color: #1cc88a; }
.bg-warning-soft { background: rgba(246, 194, 62, 0.1); color: #f6c23e; }
.bg-info-soft { background: rgba(54, 185, 204, 0.1); color: #36b9cc; }

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--navy-primary);
    margin: 0;
}

.stat-label {
    color: #6c757d;
    margin: 0;
    font-size: 0.9rem;
}

/* Content Cards */
.content-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    overflow: hidden;
}

.card-header {
    background: white;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    padding: 1.5rem;
}

.card-header h5 {
    color: var(--navy-primary);
    font-weight: 600;
}

/* Custom Table */
.custom-table {
    margin: 0;
}

.custom-table thead {
    background: rgba(27, 43, 75, 0.02);
}

.custom-table th {
    color: var(--navy-primary);
    font-weight: 600;
    padding: 1rem 1.5rem;
    border-bottom: 2px solid rgba(27, 43, 75, 0.05);
}

.custom-table td {
    padding: 1rem 1.5rem;
    vertical-align: middle;
}

/* Gallery Items */
.gallery-item {
    position: relative;
    aspect-ratio: 1;
    overflow: hidden;
    border-radius: 8px;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.3s ease;
}

.gallery-overlay {
    position: absolute;
    inset: 0;
    background: rgba(27, 43, 75, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.gallery-overlay i {
    color: white;
    font-size: 1.2rem;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

/* Badges */
.badge {
    padding: 0.5em 1em;
    font-weight: 500;
}

.bg-success-soft {
    background: rgba(28, 200, 138, 0.1);
    color: #1cc88a;
}

.bg-warning-soft {
    background: rgba(246, 194, 62, 0.1);
    color: #f6c23e;
}

.bg-info-soft {
    background: rgba(54, 185, 204, 0.1);
    color: #36b9cc;
}

/* Buttons */
.btn-primary {
    background: var(--navy-primary);
    border-color: var(--navy-primary);
}

.btn-primary:hover {
    background: var(--navy-secondary);
    border-color: var(--navy-secondary);
}
</style>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endpush
@endsection 