<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tas extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function kategoris(){
        return $this -> belongsTo(Kat_Tas::class, 'kategori_id','id');
    }
}
