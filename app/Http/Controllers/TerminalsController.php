<?php

namespace App\Http\Controllers;
use App\Models\Terminal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerminalsController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
 $terminal = Terminal::all();
    	// mengirim data pegawai ke view index
    	return view('layout/terminal',['terminal'=>$terminal]);
 
    }

    public function tambahterminal()
    {
    	// mengambil data dari table pegawai
    	
 
    	// mengirim data pegawai ke view index
    	return view('layout/tambahterminal');
 
    }

    public function insertdata4(Request $request)
    {
        Terminal::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('terminal');
        
        // mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	
 
    }

    public function ubahterminal($id_terminal)
    {
    	// mengambil data dari table pegawai
        $terminal = Terminal::find($id_terminal);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahterminal',compact('terminal'));
 
    }

    public function updatedata4(Request $request, $id_terminal)
    {
    	// mengambil data dari table pegawai
        $terminal = Terminal::find($id_terminal);
        $terminal->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('terminal');
 
    }

    public function deleteterminal($id_terminal)
    {
    	// mengambil data dari table pegawai
        $terminal = Terminal::find($id_terminal);
        $terminal->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('terminal');
 
    }
}
