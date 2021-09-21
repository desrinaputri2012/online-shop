<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class EmailController extends Controller
{

  public function index()
  {
      //menampilkan semua data pesanan
      $user_id = \Auth::user()->id;

      $users = DB::table('users')
                  ->join('order','order.user_id','=','users.id')
                  ->select('users.*','order.invoice','order.subtotal')
                  ->where('order.user_id',$user_id)->get();
      
      $data = array(
          'users' => $users
      );
      return view('email',$data);
  }

    public function create()
    {

        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'email' => $request->email,
          'subject' => $request->subject,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return view('user.terimakasih');
    }
}