<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use Illuminate\Support\Str;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;
use File;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index(){
        return view('admin.master.berita.index');
    }

    public function add(){
        $data['kategori'] = Kategori::all();
        return view('admin.master.berita.add', $data);
    }

    public function detail($id){
        $data['data'] = Berita::find($id);
        $data['kategori'] = Kategori::all();
        return view('admin.master.berita.add', $data);
    }

    public function datatables(){
        $data = Berita::with('kategori')->orderby('id','desc')->get();

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->escapeColumns([])
                    ->make(true);
    }

    public function change_status($id, $status){
        // $count_headline = Berita::where('is_headline', 1)->count();
        
        if ($status == 1) {
            Berita::where('id', $id)->update(['is_publish' => $status]);
        }else{
            Berita::where('id', $id)->update(['is_publish' => $status]);
        }

        if($status == 1){
            $message = 'Data berhasil diaktifkan';
        }else{
            $message = 'Data berhasil dinon-aktifkan';
        }

        return [
            'status' => 200,
            'message' => $message
        ];
    }

    public function store_update(Request $request){
        $delete = Berita::find($request->id);
        if(isset($request->id) && $delete->gambar !== $request->url_image){
            File::delete("berkas/headline/" . $delete->gambar);
        }
        // $count_headline = Berita::where('is_headline', 1)->count();
        // if($count_headline <= 5 && $request->is_publish == 1){
        //     $request->request->add(['is_headline' => 1]);
        // }
        Berita::updateOrCreate(['id' => $request->id], [
            'kategori_id' => $request->kategori,
            'judul' => $request->judul,
            'slug_judul' => Str::slug($request->judul),
            'gambar' => $request->url_image,
            'meta_keyword' => $request->meta_keyword,
            'meta_deskripsi' => $request->meta_deskripsi,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'text_gambar' => $request->text_gambar,
            'content' => $request->content,
            'is_publish' => $request->is_publish,
            'is_headline' => $request->is_headline ?? 0
        ]);

        return [
            'status' => 201, // SUCCESS
            'message' => 'Data berhasil disimpan',
            'link' => '/admin/master/berita'
        ];
    }

    public function check_image(request $request){

        $path = 'berkas/headline/';
        $file = $request->file('file');
        $name = md5(time()."_".$file->getClientOriginalName()).".".$file->getClientOriginalExtension();
        $file->move($path, $name);

        return response()->json([
            'name' => $name,
        ]);
    }

    public function delete($id){
        $delete = Berita::find($id);
        if($delete <> ""){
            File::delete("berkas/headline/" . $delete->gambar);
            $delete->delete();
            return [
                'status' => 200,
                'message' => 'Data berhasil dihapus'
            ];
        }

        return [
            'status' => 300,
            'message' => 'Data tidak ditemukan'
        ];
    }
}
