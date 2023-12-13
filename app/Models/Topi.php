<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topi extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function kategoris(){
        return $this -> belongsTo(Kat_Topi::class, 'kategori_id','id');
    }
}
