<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, Authenticatable;

    protected $table = 'admin'; // Nama tabel di database

    protected $primaryKey = 'id_admin'; // Primary key

    protected $fillable = [
        'nama',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
    public $timestamps = false;
}
