<?php

namespace App\Http\Controllers;
use App\Models\Terminal;
use App\Models\Bus;
use App\Models\Rute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class RutesController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $rute = Rute::with('Terminal')->get();
        $rute = Rute::with('Bus')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/rute',compact('rute'));
 
    }

    public function tambahrute()
    {
    	// mengambil data dari table pegawai
    	
        $terminal=Terminal::all();
        $bus=Bus::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahrute',compact('terminal', 'bus'));
 
    }

    public function insertdata1(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Rute::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('rute');
 
    }

    public function ubahrute($id_rute)
    {
    	// mengambil data dari table pegawai
        $rute = Rute::find($id_rute);
        $terminal=Terminal::all();
        $bus=Bus::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahrute',compact('rute','bus','terminal'));
 
    }

    public function updatedata1(Request $request, $id_rute)
    {
    	// mengambil data dari table pegawai
        $rute = Rute::find($id_rute);
        $rute->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('rute');
 
    }

    public function deleterute($id_rute)
    {
    	// mengambil data dari table pegawai
        $rute = Rute::find($id_rute);
        $rute->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('rute');
 
    }

    public function eksporrute()
    {
    	// mengambil data dari table pegawai
        $rute = Rute::with('Bus')->get();
        $rute = Rute::with('Terminal')->get();
        view()->share('rute',$rute);
        $pdf = PDF::loadview('layout/datarute-pdf');
        return $pdf->download('rute.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
    public function deleteAll2()
    {
    	// mengambil data dari table pegawai
        $rute = Rute::all();
        $rute->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('rute');
 
    }
}
