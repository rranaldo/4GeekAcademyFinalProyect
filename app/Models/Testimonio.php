<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonio extends Model
{

    use SoftDeletes;

    protected $table = 'testimonio';

    protected $dates = ['deleted_at','update_at','created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagen', 'contenido','nombre','empresa','cargo','url'
    ];


    public function getAll(){

        return $this->orderBy("id")->get();
    }

}
