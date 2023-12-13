<?php

namespace App\Models;

use App\Models\CatePant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pant extends Model
{
    use HasFactory;
    protected $fillable = ['name_celana', 'cate_pant_id', 'deskripsi_celana', 'gambar_celana'];

    public function kategori_celanas(){
        return $this -> belongsTo(CatePant::class, 'cate_pant_id','id');
    }
}
