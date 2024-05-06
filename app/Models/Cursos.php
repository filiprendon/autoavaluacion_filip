<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    public $timestamp = false;


    public function cicle()
    {
        return $this->belongsTo(Cicle::class, 'cicles_id');
    }

    public function moduls()
    {
        return $this->belongsToMany(Modul::class, 'moduls_has_cursos', 'cursos_id', 'moduls_id')->withPivot('curs_academic_id');
    }
}
