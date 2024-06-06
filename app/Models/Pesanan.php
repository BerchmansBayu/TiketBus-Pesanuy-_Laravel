<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];
    protected $dates1 = ['updated_at'];
    protected $primaryKey = 'id_pesanan';
    public function Pengguna(){
    return $this->belongsTo(Pengguna::class, 'id_pengguna','id_pengguna');
    }
    public function Rute(){
        return $this->belongsTo(Rute::class, 'id_rute','id_rute');
        }
}