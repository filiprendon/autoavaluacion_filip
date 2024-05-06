<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    use HasFactory;

    protected $table = 'cicles';

    public $timestamps = false;

    public function cursos()
    {
        return $this->hasMany(Cursos::class, 'cicles_id');
    }
}
