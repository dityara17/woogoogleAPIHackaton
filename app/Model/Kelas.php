<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use SoftDeletes;

    protected $table = 'kelas';

    public function getUser(){
        return $this->belongsTo('App\Model\User','author');
    }
}
