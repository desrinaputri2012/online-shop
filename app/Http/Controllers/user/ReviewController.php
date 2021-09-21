<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Reviews;
use App\Order;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index()
    {
        //menampilkan semua data pesanan
        $user_id = \Auth::user()->id;

        $reviews = DB::table('users')
                    ->join('reviews','reviews.user_id','=','users.id')
                    ->join('products','reviews.product_id','=','products.id')
                    ->select('users.*','reviews.review','reviews.product_id')
                    ->where('reviews.user_id',$user_id)
                    ->get();

        
        $data = array(
            'reviews' => $reviews,
            'users' => $reviews
        );
        return view('user.tambahreview',$data);
    }

    public function TambahReview()
    {
        //menampilkan form tambah ulasan

        $data = array(
            'reviews' => Reviews::all(),
        );
        return view('user.tambahreview',$data);
    }

    public function store($product_id,Request $request)
    {
        $reviews = Reviews::FindOrFail($product_id);
        $reviews->review = $request->review;
        $reviews->save();
        return redirect()->route('home');
    }
}
