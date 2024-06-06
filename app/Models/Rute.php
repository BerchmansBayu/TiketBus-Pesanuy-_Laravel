<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];
    protected $dates1 = ['updated_at'];
    protected $primaryKey = 'id_rute';
    public function Bus(){
    return $this->belongsTo(Bus::class, 'id_bus','id_bus');
    }
    public function Terminal(){
        return $this->belongsTo(Terminal::class, 'id_terminal','id_terminal');
        }
}