<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori'; // Menentukan primary key dengan benar
    protected $fillable = ['id_kategori', 'nama_kategori'];
    public $timestamps = false;

    public function komponen()
    {
        return $this->hasMany(Komponen::class, 'id_kategori', 'id_kategori');
    }
}