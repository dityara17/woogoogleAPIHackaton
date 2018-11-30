<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use SoftDeletes;

    protected $table = 'kelas';

    public function getUser(){
        return $this->belongsTo('App\Model\User','author');
    }

    public function getKategori(){
        return $this->belongsTo('App\Model\Kategori','id_kategori');
    }

    public function getEnroll(){
        return $this->hasMany('App\Model\Enroll','id_kelas');
    }
}
