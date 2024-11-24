<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $agendas = Post::where('kategori_id', 2)
            ->where('status', 'published')
            ->with(['galery.fotos' => function($query) {
                $query->latest()->take(1);
            }])
            ->latest()
            ->take(3)
            ->get();

        $informasi = Post::where('kategori_id', 1)
            ->where('status', 'published')
            ->with(['galery.fotos' => function($query) {
                $query->latest()->take(1);
            }])
            ->latest()
            ->take(3)
            ->get();

        $latestPhotos = [];
        $posts = Post::where('kategori_id', 3)
            ->with(['galery.fotos' => function($query) {
                $query->latest();
            }])
            ->latest()
            ->take(2)
            ->get();

        foreach($posts as $post) {
            if($post->galery && $post->galery->fotos) {
                foreach($post->galery->fotos->take(3) as $foto) {
                    $latestPhotos[] = [
                        'judul' => $foto->judul,
                        'file' => $foto->file,
                        'galeri' => $post->judul,
                        'tanggal' => $post->created_at
                    ];
                }
            }
        }

        return view('welcome', compact('agendas', 'informasi', 'latestPhotos', 'posts'));
    }

    public function galeri()
    {
        $posts = Post::where('kategori_id', 3)
            ->with(['galery.fotos'])
            ->latest()
            ->paginate(12);

        return view('galeri', compact('posts'));
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function agenda()
    {
        return view('agenda');
    }
} 