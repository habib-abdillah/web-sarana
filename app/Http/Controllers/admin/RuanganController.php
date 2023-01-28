<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AllRuangan()
    {
        $allr = DB::table('ruangan')->get();
        return view('admin.ruangan.all-ruangan', compact('allr'));
    }

    public function AddRuangan()
    {
        return view('admin.ruangan.addruangan');
    }

    public function InRuangan(Request $request)
    {
        $data = array();
        $data['nama_ruangan'] = $request->nama_ruangan;
        $data['lokasi_ruangan'] = $request->lokasi_ruangan;
        $data['kode_ruangan'] = $request->kode_ruangan;
        $data['lebar_ruangan'] = $request->lebar_ruangan;
        $data['panjang_ruangan'] = $request->panjang_ruangan;
        $data['lantai_ke'] = $request->lantai_ke;
        $data['kapasitas'] = $request->kapasitas;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $insert = DB::table('ruangan')->insert($data);
        if($insert)
        {
            return redirect('all-ruangan')->with('success', 'Ruangan berhasil ditambahkan!');
        }else{
            return redirect('all-ruangan');
        }
    }

    public function EditRuangan($id)
    {
        $edit = DB::table('ruangan')->where('id', $id)->first();
        return view('admin.ruangan.editruangan', compact('edit'));
    }

    public function UpdateRuangan(Request $request, $id)
    {
        $data = array();
        $data['nama_ruangan'] = $request->nama_ruangan;
        $data['lokasi_ruangan'] = $request->lokasi_ruangan;
        $data['kode_ruangan'] = $request->kode_ruangan;
        $data['lebar_ruangan'] = $request->lebar_ruangan;
        $data['panjang_ruangan'] = $request->panjang_ruangan;
        $data['lantai_ke'] = $request->lantai_ke;
        $data['kapasitas'] = $request->kapasitas;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('ruangan')->where('id', $id)->update($data);
        if($update)
        {
            return redirect('all-ruangan')->with('success', 'Ruangan berhasil diedit!');
        }else{
            return redirect('all-ruangan');
        }
    }

    public function DeleteRuangan($id)
    {
        $delete = DB::table('ruangan')->where('id', $id)->delete();
        if($delete)
        {
            return redirect('all-ruangan')->with('success', 'Ruangan berhasil dihapus!');
        }else{
            return redirect('all-ruangan');
        }
    }
}
