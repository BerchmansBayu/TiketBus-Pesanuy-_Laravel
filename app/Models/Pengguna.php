<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Pengguna extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'pengguna'; // Menentukan tabel pengguna
    protected $primaryKey = 'id_pengguna';
    protected $fillable = [
        'nama_pengguna',
        'email_pengguna',
        'password',
    ];
    protected $dates = ['created_at', 'updated_at'];
    public $timestamps = true;

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
?>