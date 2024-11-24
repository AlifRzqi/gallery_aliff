@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="mb-4">Galeri Kegiatan</h1>
        <p class="mt-3 mb-4">Dokumentasi Kegiatan SMKN 4 Bogor</p>
        <a href="#galeri" class="btn btn-warning">Lihat Galeri</a>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            @php
            $posts = App\Models\Post::where('kategori_id', 3)
                ->with(['galery.fotos'])
                ->latest()
                ->paginate(12);
            @endphp

            @foreach($posts as $post)
                @if($post->galery && $post->galery->fotos)
                    @foreach($post->galery->fotos as $foto)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ Storage::url($foto->file) }}" 
                                 alt="{{ $foto->judul }}"
                                 class="img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">{{ $foto->judul }}</h5>
                                <p class="card-text">{{ $post->judul }}</p>
                                <small class="text-muted">
                                    <i class="fas fa-calendar-alt"></i> 
                                    {{ $post->created_at->format('d M Y') }}
                                </small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
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