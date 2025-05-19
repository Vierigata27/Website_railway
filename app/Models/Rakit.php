<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rakit extends Model
{
    use HasFactory;
    
    protected $table = 'rakit_komputer'; // Nama tabel di database
    protected $primaryKey = 'id_rakit'; // Primary key tabel
    protected $fillable = [
        'id_rakit', 
        'id_komponen_cpu', 'id_komponen_motherboard', 'id_komponen_gpu', 
        'id_komponen_ram', 'id_komponen_storage', 'id_komponen_psu',
        'id_komponen_casing', 'id_komponen_cooler'
    ];
    public $timestamps = false;
    

    // Relasi ke setiap komponen
    public function cpu()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_cpu', 'id_komponen');
    }

    public function motherboard()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_motherboard', 'id_komponen');
    }

    public function gpu()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_gpu', 'id_komponen');
    }

    public function ram()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_ram', 'id_komponen');
    }

    public function storage()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_storage', 'id_komponen');
    }

    public function psu()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_psu', 'id_komponen');
    }

    public function casing()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_casing', 'id_komponen');
    }

    public function cooler()
    {
        return $this->belongsTo(Komponen::class, 'id_komponen_cooler', 'id_komponen');
    }
}
