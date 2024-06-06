<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layout/registrasi');
    }

    public function process1(Request $request)
    {
        Pengguna::create($request->all());

        return redirect()->route('login'); // Atau rute lain yang diinginkan setelah registrasi berhasil
    }
}
?>