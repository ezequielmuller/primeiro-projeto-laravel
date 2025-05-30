<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function Usuario(){
        return $this->belongsTo("App\Models\User", 'user_id');
    }
}
