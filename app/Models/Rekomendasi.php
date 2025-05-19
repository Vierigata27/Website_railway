<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;
    
    protected $table = 'sistem_rekomendasi'; // Nama tabel di database
    protected $primaryKey = 'id_rekomendasi'; // Primary key tabel
    public $timestamps = false; // Menonaktifkan timestamps jika tidak menggunakan updated_at
    protected $fillable = [
        'id_rekomendasi', 'id_pengguna', 
        'id_rakit', 'total_performa', 'total_buget' ,'kategori' 
    ];
    const CREATED_AT = 'tanggal_rakit';

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }

    public function rakit()
    {
        return $this->hasOne(Rakit::class, 'id_rakit', 'id_rakit');
    }


}
