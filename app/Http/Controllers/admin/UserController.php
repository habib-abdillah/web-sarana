<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllUser()
    {
        $all = DB::table('users')->get();
        return view('admin.user.all-user', compact('all'));
    }

    public function AddUser()
    {
        return view('admin.user.adduser');
    }

    public function InUser(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        $insert = DB::table('users')->insert($data);
        if($insert)
        {
            return redirect('all-user')->with('success', 'User berhasil ditambahkan!');
        }else{
            return redirect('all-user');
        }
    }

    public function EditUser($id)
    {
        $edit = DB::table('users')->where('id', $id)->first();
        return view('admin.user.edituser', compact('edit'));
    }

    public function UpdateUser(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role'] = $request->role;
        $data['updated_at'] = date('Y-m-d H:i:s');

        $update = DB::table('users')->where('id', $id)->update($data);
        if($update)
        {
            return redirect('all-user')->with('success', 'User berhasil diedit!');
        }else{
            return redirect('all-user');
        }
    }

    public function ResetPassword($id)
    {
        $respassword = DB::table('users')->where('id', $id)->first();
        return view('admin.user.resetpassword', compact('respassword'));
    }

    public function ResPass(Request $request, $id)
    {
        $data = array();
        $data['password'] = Hash::make($request->password);
        $data['updated_at'] = date('Y-m-d H:i:s');

        $respas = DB::table('users')->where('id', $id)->update($data);
        if($respas)
        {
            return redirect('all-user')->with('success', 'Password duser berhasil di reset!');
        }else{
            return redirect('all-user');
        }
    }

    public function DeleteUser($id)
    {
        $delete = DB::table('users')->where('id', $id)->delete();
        if($delete)
        {
            return redirect('all-user')->with('success', 'Data berhasil dihapus!');
        }else{
            return redirect('all-user');
        }
    }

}
