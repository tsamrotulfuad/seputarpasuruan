<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Site;
use App\Models\Kategori;
use App\Models\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function kategori(Kategori $kategori)
    {
        $title = $kategori->nama;
        $site = Site::get()->first; //site offcanvas
        $sosmed = SosialMedia::all(); //sosmed
        $top_latest_news = DB::table('posts')
            ->select('judul')
            ->limit(3)
            ->latest('tanggal')
            ->get(); //top_latest_news
        $kategoris = Kategori::limit(5)->get();
        $tags = Tag::limit(10)->get(); //tags
        $latest_post = Post::with('kategori', 'author')->latest('tanggal')->limit(4)->get();
        $post = Post::with(['kategori', 'author'])
            ->where('kategori_id', $kategori->id)
            ->where('status', 'publish')
            ->paginate(3);
        $tahun = Carbon::now()->isoFormat('Y'); // tahun
        // return dd($post);
        return view('kategori', compact('title', 'site', 'sosmed', 'top_latest_news', 'kategoris', 'tags', 'post', 'latest_post', 'tahun'));    
    }
}
