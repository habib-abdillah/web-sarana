<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllBangunan()
    {
        $allb = DB::table('bangunan')->get();
        return view('admin.bangunan.all-bangunan', compact('allb'));
    }

    public function AddBangunan()
    {
        return view('admin.bangunan.addbangunan');
    }

    public function InBangunan(Request $request)
    {
        $data = array();
        $data['nama_bangunan'] = $request->nama_bangunan;
        $data['lebar_bangunan'] = $request->lebar_bangunan;
        $data['panjang_bangunan'] = $request->panjang_bangunan;
        $data['kepemilikan'] = $request->kepemilikan;
        $data['jml_lantai'] = $request->jml_lantai;
        $data['tgl_sk'] = $request->tgl_sk;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $insert = DB::table('bangunan')->insert($data);
        if($insert)
        {
            return redirect('all-bangunan')->with('success', 'Bangunan berhasil ditambahkan!');
        }else{
            return redirect('all-bangunan');
        }
    }

    public function EditBangunan($id)
    {
        $edit = DB::table('bangunan')->where('id', $id)->first();
        return view('admin.bangunan.editbangunan', compact('edit'));
    }

    public function UpdateBangunan(Request $request, $id)
    {
        $data = array();
        $data['nama_bangunan'] = $request->nama_bangunan;
        $data['lebar_bangunan'] = $request->lebar_bangunan;
        $data['panjang_bangunan'] = $request->panjang_bangunan;
        $data['kepemilikan'] = $request->kepemilikan;
        $data['jml_lantai'] = $request->jml_lantai;
        $data['tgl_sk'] = $request->tgl_sk;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('bangunan')->where('id', $id)->update($data);
        if($update)
        {
            return redirect('all-bangunan')->with('success', 'Bangunan berhasil diedit!');
        }else{
            return redirect('all-bangunan');
        }
    }

    public function DeleteBangunan($id)
    {
        $delete = DB::table('bangunan')->where('id', $id)->delete();
        if($delete)
        {
            return redirect('all-bangunan')->with('success', 'Bangunan berhasil dihapus!');
        }else{
            return redirect('all-bangunan');
        }
    }
}
