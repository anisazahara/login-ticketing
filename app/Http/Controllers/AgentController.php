<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Agentstatus;


class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporans = Agent::latest()->paginate(5);
        return view('agent/agent',compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $laporans = Agent::all();
        return view('agent/form',compact('laporans'));

    }
    public function delete(Request $request,$id){
        $laporans = Agent::find($id);
        $laporans->delete();
        return redirect('/agent')->with('status','data berhasil di hapus');

    }

    
    public function edit($id){
        $laporans = Agent::where('id' , $id)->first();
        return view('agent/form' , compact('laporans'));
    }
    
    public function update(Request $request,$id){
        $laporans = Agent::find($id);
        // $laporans->subject = $request->subject;
        // $laporans->priority = $request->priority;
        // $laporans->description = $request->description;
        $laporans->status = $request->status;
        $laporans->save();

        return redirect('/agent')->with('statusedit','data berhasil di ubah');
        
    }
    
}
