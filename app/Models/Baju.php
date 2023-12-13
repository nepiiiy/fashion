<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\KategoriController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Baju extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategoris(){
        return $this -> belongsTo(Kategori::class, 'kategori_id','id');
    }
}
