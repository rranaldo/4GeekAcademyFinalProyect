<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Texto extends Model
{

    use SoftDeletes;

    protected $table = 'texto';

    protected $dates = ['deleted_at','update_at','created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contexto', 'contenido'
    ];


    public function getAll(){

        return $this->orderBy("id")->get();
    }

}
