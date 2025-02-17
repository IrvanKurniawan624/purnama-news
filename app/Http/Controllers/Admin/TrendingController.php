<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use DataTables;

class TrendingController extends Controller
{
    public function index(){
        return view('admin.laporan.trending.index');
    }

    public function datatables(){
        $data = Berita::with('kategori')->orderby('jumlah_klik','desc')->get();

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }
}
