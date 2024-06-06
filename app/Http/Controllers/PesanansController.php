<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use App\Models\Pengguna;
use App\Models\Rute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PesanansController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $pesanan = Pesanan::with('Pengguna')->get();
        $pesanan = Pesanan::with('Rute')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/pesanan',compact('pesanan'));
 
    }

    public function tambahpesanan()
    {
    	// mengambil data dari table pegawai
    	
        $pengguna=Pengguna::all();
        $rute=Rute::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahpesanan',compact('pengguna', 'rute'));
 
    }

    public function insertdata(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Pesanan::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pesanan');
 
    }

    public function ubahpesanan($id_pesanan)
    {
    	// mengambil data dari table pegawai
        $pesanan = Pesanan::find($id_pesanan);
        $pengguna=Pengguna::all();
        $rute=Rute::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahpesanan',compact('pesanan','rute','pengguna'));
 
    }

    public function updatedata(Request $request, $id_pesanan)
    {
    	// mengambil data dari table pegawai
        $pesanan = Pesanan::find($id_pesanan);
        $pesanan->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pesanan');
 
    }

    public function deletepesanan($id_pesanan)
    {
    	// mengambil data dari table pegawai
        $pesanan = Pesanan::find($id_pesanan);
        $pesanan->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pesanan');
 
    }

    

    public function deleteAll4()
    {
    	// mengambil data dari table pegawai
        $pesanan = Pesanan::all();
        $pesanan->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('pesanan');
 
    }
}
