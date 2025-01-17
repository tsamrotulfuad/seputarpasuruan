<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\Site;
use App\Models\Pesan;
use App\Models\Video;
use App\Models\SosialMedia;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Seputar Pasuruan';  //title
        $sosmed = SosialMedia::all(); //sosmed
        $site = Site::get()->find(1); //site offcanvas
        $top_latest_news = DB::table('posts')
            ->select('judul')
            ->limit(3)
            ->latest('tanggal')
            ->get(); //top_latest_news
        $top_post = DB::table('posts')
            ->join('authors', 'authors.id', '=', 'posts.author_id')
            ->join('kategoris', 'kategoris.id', '=', 'posts.kategori_id')
            ->select('posts.judul', 'kategoris.nama as kategori', 'kategoris.slug as kategori_slug', 'posts.tanggal', 'featured_image', 'posts.slug')
            ->where('posts.status', '=', 'publish')
            ->groupBy('posts.kategori_id')
            ->orderby('posts.tanggal', 'desc')
            ->get(); //top post
        $main_post = Post::with('kategori', 'author')->latest('tanggal')->limit(1)->get(); //main post
        $tags = Tag::limit(10)->get(); //tags
        $kategoris = Kategori::limit(5)->get(); //kategori
        $latest_post_side = Post::with('kategori', 'author')->inRandomOrder()->limit(5)->get();
        $latest_post_main = Post::with('kategori', 'author')->inRandomOrder()->limit(12)->get();
        $second_post = DB::table('posts')
            ->join('authors', 'authors.id', '=', 'posts.author_id')
            ->join('kategoris', 'kategoris.id', '=', 'posts.kategori_id')
            ->select('posts.id', 'posts.slug', 'posts.judul', 'kategoris.nama as kategori', 'kategoris.slug as kategori_slug', 'posts.featured_image', 'posts.slug')
            ->where('posts.status', '=', 'publish')
            ->groupBy('posts.kategori_id')
            ->orderby('posts.tanggal', 'desc')
            ->limit(4)
            ->skip(1)
            ->get(); //second post
        $iklan_main = DB::table('iklans')
            ->where('posisi', '=', 'main')
            ->where('status', '=', 'aktif')
            ->limit(1)
            ->latest()
            ->get(); // iklan main
        $iklan_sidebar = DB::table('iklans')
            ->where('posisi', '=', 'sidebar')
            ->where('status', '=', 'aktif')
            ->limit(1)
            ->latest()
            ->get(); // iklan-sidebar
        $tranding_video = Video::with('author')->latest()->limit(3)->get();  // video
        $feed = Post::with('kategori', 'author')->inRandomOrder()->limit(4)->get();
        $post_slide_bottom = Post::with('kategori', 'author')->inRandomOrder()->get();
        
        $tahun = Carbon::now()->isoFormat('Y'); // tahun

        return view(
            'home',
            compact(
                'title',
                'sosmed',
                'site',
                'tahun',
                'iklan_main',
                'kategoris',
                'iklan_sidebar',
                'tranding_video',
                'tags',
                'top_latest_news',
                'top_post',
                'main_post',
                'second_post',
                'latest_post_main',
                'latest_post_side',
                'feed',
                'post_slide_bottom'
            )
        );
    }

    public function show($slug)
    {
        $title = 'Seputar Pasuruan';
        $site = $this->index()->site;
        $sosmed = $this->index()->sosmed;
        $top_latest_news = $this->index()->top_latest_news;
        $tags = $this->index()->tags;
        $tahun = $this->index()->year;

        $post = Post::with('kategori', 'author')->where('slug', $slug)->first(); // post detail
        $iklan_post = DB::table('iklans')
            ->where('posisi', '=', 'post_sidebar')
            ->where('status', '=', 'aktif')
            ->limit(1)
            ->latest()
            ->get(); // iklan-sidebar

        $related_posts = DB::table('posts')
            ->join('authors', 'authors.id', '=', 'posts.author_id')
            ->select('posts.*', 'authors.nama', 'authors.gambar', 'posts.slug')
            ->where('author_id', '=', $post->author_id)
            ->where('status', '=', 'publish')
            ->limit(3)
            ->latest()
            ->get(); // related-post

        $latest_post = DB::table('posts')
            ->join('authors', 'authors.id', '=', 'posts.author_id')
            ->join('kategoris', 'kategoris.id', '=', 'posts.kategori_id')
            ->select('posts.judul', 'kategoris.nama as kategori', 'authors.nama as author', 'posts.featured_image')
            ->where('posts.status', '=', 'publish')
            ->groupBy('posts.kategori_id')
            ->orderby('posts.tanggal', 'desc')
            ->limit(4)
            ->skip(1)
            ->get(); //second post
        $prev_post = DB::table('posts')
            ->select('posts.judul', 'posts.id', 'posts.slug')
            ->where('posts.status', '=', 'publish')
            ->inRandomOrder()
            ->first(); //prev_post
        $next_post = DB::table('posts')
            ->select('posts.judul', 'posts.id', 'posts.slug')
            ->where('posts.status', '=', 'publish')
            ->inRandomOrder()
            ->latest()
            ->first(); //next_post
        // return dd($next_post);
        return view(
            'show',
            compact(
                'post',
                'title',
                'site',
                'sosmed',
                'top_latest_news',
                'tags',
                'tahun',
                'iklan_post',
                'related_posts',
                'latest_post',
                'prev_post',
                'next_post'
            )
        );
    }

    public function kontak()
    {
        $title = 'Kontak Kami';
        $site = $this->index()->site;
        $sosmed = $this->index()->sosmed;
        $top_latest_news = $this->index()->top_latest_news;
        $tags = $this->index()->tags;
        $tahun = $this->index()->year;

        return view(
            'kontak',
            compact('title', 'site', 'sosmed', 'top_latest_news', 'tags', 'tahun')
        );
    }

    public function kontak_store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'subject'   => 'required',
            'phone'     => 'required|numeric',
            'email'     => 'required|email',
            'message'   => 'required',
        ]);

        Pesan::create([
            'nama'      => $request->nama,
            'subject'   => $request->subject,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'message'   => $request->message,
        ]);

        return redirect()->route('home.kontak');
    }

    public function tentang()
    {
        $title = 'Tentang Kami';
        $site = $this->index()->site;
        $sosmed = $this->index()->sosmed;
        $top_latest_news = $this->index()->top_latest_news;
        $tags = $this->index()->tags;
        $tahun = $this->index()->year;
        $author = DB::table('authors')
            ->groupBy('jabatan')
            ->limit(4)
            ->get(); //author

        return view(
            'tentang',
            compact('title', 'site', 'sosmed', 'top_latest_news', 'tags', 'tahun', 'author')
        );
    }
}
