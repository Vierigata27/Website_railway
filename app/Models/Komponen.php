<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    use HasFactory;
    protected $table = 'komponen_komputer'; // Sesuai dengan nama tabel di database
    protected $primaryKey = 'id_komponen'; // Menentukan primary key dengan benar
    protected $fillable = ['id_komponen', 'nama_komponen','brand_komponen', 'id_kategori', 'soket_komponen', 'harga_komponen', 'performa_komponen','daya_komponen'];
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori'); // Relasi yang benar
    }
}