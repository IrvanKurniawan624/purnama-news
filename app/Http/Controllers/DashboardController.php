<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['trending'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('jumlah_klik', 'desc')->limit(4)->get();
        $data['lastest'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('created_at', 'desc')->limit(4)->get();
        $data['kategori'] = Kategori::all();
        $data['kategori_limit'] = Kategori::limit(3)->get();
        foreach($data['kategori_limit'] as $key => $item){
            $data[$item->kategori_slug] = Berita::where('is_publish', 1)->where('kategori_id', $item->id)->with('kategori')->get();
        }
        $data['berita'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('created_at', 'desc')->get();
        $data['headline'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('created_at', 'desc')->get();
        return view('dashboard.index', $data);
    }

    public function detail($slug){
        $data['kategori'] = Kategori::all();
        $data['trending'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('jumlah_klik', 'desc')->limit(4)->get();
        $data['lastest'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('created_at', 'desc')->limit(4)->get();
        
        $data['berita_detail'] = Berita::where('is_publish', 1)->where('slug_judul', $slug)->first();
        $data['previous'] = Berita::where('is_publish', 1)->where('id', '<', $data['berita_detail']->id)->orderBy('id', 'desc')->first();
        $data['next'] = Berita::where('is_publish', 1)->where('id', '>', $data['berita_detail']->id)->orderBy('id', 'asc')->first();
        return view('pages-detail.index', $data);
    }

    public function kategori($slug){
        $data['trending'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('jumlah_klik', 'desc')->limit(4)->get();
        $data['lastest'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('created_at', 'desc')->limit(4)->get();
        $data['kategori'] = Kategori::all();
        $data['kategori_detail'] = Kategori::where('kategori_slug', $slug)->first();
        $data['berita'] = Berita::where('is_publish', 1)->where('kategori_id', $data['kategori_detail']->id)->with('kategori')->orderBy('created_at', 'desc')->get();
        return view('kategori-detail.index', $data);
    }

    public function display_search($keyword){
        $data = Berita::where('is_publish', 1)->where('judul', 'like', "%$keyword%")->with('kategori')->count();
        return $data;
    }

    public function get_data_search($keyword){
        $data = Berita::where('is_publish', 1)->where('judul', 'like', "%$keyword%")->select(['judul', 'slug_judul'])->get();
        return response()->json($data);
    }

    public function search(Request $request){
        $data['trending'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('jumlah_klik', 'desc')->limit(4)->get();
        $data['lastest'] = Berita::where('is_publish', 1)->with('kategori')->orderBy('created_at', 'desc')->limit(4)->get();
        $data['kategori'] = Kategori::all();
        
        $data['berita'] = Berita::where('is_publish', 1)->where('judul', 'like', "%$request->n%")->with('kategori')->get();
        return view('search-detail.index', $data);
    }
}
