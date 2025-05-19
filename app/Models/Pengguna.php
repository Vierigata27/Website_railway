<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna'; // Pastikan nama tabel benar
    protected $primaryKey = 'id_pengguna'; 

    // Jika id_pengguna bukan auto-increment, tambahkan ini:
    // protected $keyType = 'string';
    // public $incrementing = false;

    protected $fillable = ['nama', 'asal', 'jenis_kelamin', 'pekerjaan', 'umur'];

    const CREATED_AT = 'created_at';

        public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }
}
