<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index()
    {
        //
        $laporans = Client::latest()->paginate(5);
        return view('client/client',compact('laporans'));
      
    }
    public function tambah()

    {
        $laporans = Client::latest()->paginate(5);
        return view('client/form',compact('laporans'));
        // return view('client/form');
        
    }

    public function simpan(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',      
            'subject' => 'required',
            'priority' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);

        // $sendgambar = $request->gambar->getClientOriginalName().'_'. time().'_'. $request->gambar->extension();
        // $request->gambar->move(public_path('images'),$sendgambar);
        Client::create([
            'user_id'=>$request['user_id'],
            'subject'=>$request['subject'],
            'priority'=>$request['priority'],
            'description'=>$request['description'],
            'status'=>$request['status'],


        
        ]);
        return redirect('/client')->with('status','Data Berhasil Di Tambah');
    }
}
