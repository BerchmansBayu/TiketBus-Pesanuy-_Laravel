<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class BussController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
 $bus = Bus::all();
    	// mengirim data pegawai ke view index
    	return view('layout/bus',['bus'=>$bus]);
 
    }

    public function tambahbus()
    {
    	// mengambil data dari table pegawai
    	
 
    	// mengirim data pegawai ke view index
    	return view('layout/tambahbus');
 
    }

    public function insertdata2(Request $request)
    {
        Bus::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('bus');
        
        // mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	
 
    }

    public function ubahbus($id_bus)
    {
    	// mengambil data dari table pegawai
        $bus = Bus::find($id_bus);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahbus',compact('bus'));
 
    }

    public function updatedata2(Request $request, $id_bus)
    {
    	// mengambil data dari table pegawai
        $bus = Bus::find($id_bus);
        $bus->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('bus');
 
    }

    public function deletebus($id_bus)
    {
    	// mengambil data dari table pegawai
        $bus = Bus::find($id_bus);
        $bus->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('bus');
 
    }

    public function deleteAll()
    {
    	// mengambil data dari table pegawai
        $bus = Bus::all();
        $bus->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('bus');
 
    }

    public function eksporbus()
    {
    	// mengambil data dari table pegawai
        $bus = Bus::all();
        view()->share('bus',$bus);
        $pdf = PDF::loadview('layout/databus-pdf');
        return $pdf->download('bus.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
}
