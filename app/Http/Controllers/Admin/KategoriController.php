<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use DataTables;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        return view('admin.master.kategori.index');
    }

    public function detail($id){
        return Kategori::find($id);
    }

    public function datatables(){
        $data = Kategori::with('created_by')->orderby('id','desc')->get();

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    public function store_update(Request $request){
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'keterangan' => 'required',
        ],
        [
            'kategori.required' => 'Kategori Belum Diisi',
            'keterangan.required' => 'Keterangan Belum Diisi',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()
            ];
        }

        $request->request->add(['kategori_slug' => Str::slug($request->kategori)]);

        Kategori::updateOrCreate(['id' => $request->id],$request->all() );

        return [
            'status' => 200, // SUCCESS
            'message' => 'Data berhasil disimpan'
        ];
    }

    public function delete($id){
        $delete = Kategori::find($id);

        if($delete <> ""){
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
