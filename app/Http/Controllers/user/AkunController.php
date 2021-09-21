<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Akun;
use Illuminate\Support\Facades\DB;
class AkunController extends Controller
{
    public function index()
    {
        //ambil session id user
        $id_user = \Auth::user()->id;

        //ambil data alamat
        $data['status_toko'] = Akun::all();
        $cekAkun = DB::table('status_toko_cust')
                    ->where('user_id',$id_user)
                    ->count();
                    //dd($cekAkun);

        //cek jika user sudah mengatur status toko maka jalankan ini
        if($cekAkun >0){
            $data['status_toko_cust'] = DB::table('status_toko_cust')
            ->join('status_toko','status_toko.id','=','status_toko_cust.status_toko_id')
            ->select('status_toko.status as status')
            ->where('status_toko_cust.user_id',$id_user)
            ->get();
            return view('user.statustokosekarang',$data);               
        }else{
            //jika belum maka tampilkan form untuk mengatur alamat
            return view('user.akun');            
        }
        
    }

    public function update($id,Request $request)
    {

        return redirect()->route('user.akun');

    }

    public function getCity($id)
    {
        //mengambil data kota/kab
        $city = City::where('province_id',$id)->get();
        return response()->json($city); 
    }
    public function simpan(Request $request)
    {
        //menyimpan produk ke database
        
            Akun::create([
                'status_toko_id' => $request->status_toko_id,
                'detail' => $request->detail,
                'user_id' => $request->user_id

            ]);

            return redirect()->route('akun')->with('status','Berhasil Menambah Produk Baru');
        }
    }
