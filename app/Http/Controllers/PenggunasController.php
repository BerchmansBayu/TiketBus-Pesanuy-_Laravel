<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PenggunasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
 $pengguna = Pengguna::all();
    	// mengirim data pegawai ke view index
    	return view('layout/pengguna',['pengguna'=>$pengguna]);
 
    }

    public function tambahpengguna()
    {
    	// mengambil data dari table pegawai
    	
 
    	// mengirim data pegawai ke view index
    	return view('layout/tambahpengguna');
 
    }

    public function insertdata3(Request $request)
    {
        Pengguna::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pengguna');
        
        // mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	
 
    }

    public function ubahpengguna($id_pengguna)
    {
    	// mengambil data dari table pegawai
        $pengguna = Pengguna::find($id_pengguna);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahpengguna',compact('pengguna'));
 
    }

    public function updatedata3(Request $request, $id_pengguna)
    {
    	// mengambil data dari table pegawai
        $pengguna = Pengguna::find($id_pengguna);
        $pengguna->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pengguna');
 
    }

    public function deletepengguna($id_pengguna)
    {
    	// mengambil data dari table pegawai
        $pengguna = Pengguna::find($id_pengguna);
        $pengguna->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pengguna');
 
    }

    public function deleteAll1()
    {
    	// mengambil data dari table pegawai
        $pengguna = Pengguna::all();
        $pengguna->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pengguna');
 
    }

    public function eksporpengguna()
    {
    	// mengambil data dari table pegawai
        $pengguna = Pengguna::all();
        view()->share('pengguna',$pengguna);
        $pdf = PDF::loadview('layout/datapengguna-pdf');
        return $pdf->download('pengguna.pdf');
    	// mengirim data pegawai ke view index
    	
 
    }
}
