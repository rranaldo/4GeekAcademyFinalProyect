<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personal extends Model
{

    use SoftDeletes;

    protected $table = 'personal';

    protected $dates = ['deleted_at','update_at','created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagen', 'contenido','nombre','cargo','twitter','facebook','github'
    ];


    public function getAll(){

        return $this->orderBy("id")->get();
    }

}
