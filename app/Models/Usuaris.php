<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuaris extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuaris';

    protected $fillable = [
        'nom_usuari',
        'contrasenya',
        'correu',
        'nom',
        'cognom',
        'actiu',
        'tipus_usuaris_id',
    ];

    protected $hidden = [
        'contrasenya',
    ];

    protected $casts = [
        'actiu' => 'boolean',
    ];

    public $timestamps = false;
    public function tipusUsuari()
    {
        return $this->belongsTo(TipusUsuari::class, 'tipus_usuaris_id');
    }
}
