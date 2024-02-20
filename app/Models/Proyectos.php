<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Illuminare\Support\Facades\DB;

class Proyectos extends Model
{
    public $table = 'proyectos';
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

//    protected static function boot()
//    {
//        parent::boot();
//        static::creating(function ($project) {
//            $proyect->user_id = auth()->id();
//        });
//    }
}
