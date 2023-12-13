<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function kategoris(){
        return $this -> belongsTo(Kat_Sepatu::class, 'kategori_id','id');
    }
}
