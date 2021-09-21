<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class CekAkunController extends Controller
{
    public function index()
    {
        //ambil session id user
        $id_user = \Auth::user()->id;
        //ambil data status toko
        $data['users'] = User::all();
        $cekAkun = DB::table('users')
                    ->where('id',$id_user)
                    ->count();
        //cek jika user sudah mengatur status toko maka jalankan ini
        if($cekAkun >0){
            $data['users'] = DB::table('users')
            ->select('users.is_toko_aktif')
            ->where('users.id',$id_user)
            ->get();
            //dd($data);
            return view('user.statustokosekarang',$data);               
        }else{
            //jika belum maka tampilkan form untuk mengatur alamat
            return view('user.akun',$data);            
        }
        
    }

    public function ubah($id)
    {
        //
    }

    public function update($id,Request $request)
    {
        //mengupdate status
        $cek_status = User::findOrFail($id);
        $cek_status->is_toko_aktif = $request->is_toko_aktif;
        $cek_status->save();
        return redirect()->route('home');

    }

    
    public function simpan(Request $request)
    {
        //
    }
}
