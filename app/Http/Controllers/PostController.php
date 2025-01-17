<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Site;
use App\Models\SosialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Seputar Pasuruan';  //title
        $title_post = 'Semua Post'; 
        $sosmed = SosialMedia::all(); //sosmed
        $site = Site::get()->first(); //site offcanvas
        $top_latest_news = DB::table('posts')
            ->select('judul')
            ->limit(3)
            ->latest('tanggal')
            ->get(); //top_latest_news
        $tags = Tag::limit(10)->get(); //tags
        $tahun = Carbon::now()->isoFormat('Y'); // tahun

        $posts = Post::with('kategori', 'author')
            ->where('status', 'publish')
            ->latest('tanggal')
            ->paginate(9);
        // return dd($posts);
        return view('posts', compact('title', 'title_post', 'sosmed', 'site', 'top_latest_news', 'tags', 'tahun', 'posts'));
    }
}
