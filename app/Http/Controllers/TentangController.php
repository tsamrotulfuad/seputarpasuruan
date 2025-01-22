<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Site;
use App\Models\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangController extends Controller
{
    public function tentang()
    {
        $title = 'Tentang Kami';
        $site = Site::get()->first(); //site offcanvas
        $sosmed = SosialMedia::all(); //sosmed
        $top_latest_news = DB::table('posts')
            ->select('judul')
            ->limit(1)
            ->latest('tanggal')
            ->get(); //top_latest_news
        $tags = Tag::limit(10)->get(); //tags
        $tahun = Carbon::now()->isoFormat('Y'); // tahun
        $latest_post = DB::table('posts')
            ->join('authors', 'authors.id', '=', 'posts.author_id')
            ->join('kategoris', 'kategoris.id', '=', 'posts.kategori_id')
            ->select('posts.judul', 'kategoris.nama as kategori', 'authors.nama as author', 'posts.featured_image', 'posts.slug')
            ->where('posts.status', '=', 'publish')
            ->groupBy('posts.kategori_id')
            ->orderby('posts.tanggal', 'desc')
            ->limit(4)
            ->skip(1)
            ->get(); //second post
        $author = DB::table('authors')
            ->groupBy('jabatan')
            ->limit(4)
            ->get(); //author

        return view(
            'tentang',
            compact('title', 'site', 'sosmed', 'top_latest_news', 'tags', 'tahun', 'author', 'latest_post')
        );
    }
}
