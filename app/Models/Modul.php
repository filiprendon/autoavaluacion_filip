<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $table = 'moduls';

    public $timestamp = false;

    public function cursos()
    {
        return $this->belongsToMany(Cursos::class, 'moduls_has_cursos', 'moduls_id', 'cursos_id')->withPivot('curs_academic_id');
    }
}
