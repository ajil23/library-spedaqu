<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'penerbit', 'kategori_id', 'halaman', 'jumlah'];

    public function kategori(){
        return $this->belongsTo(Category::class,'kategori_id','id');
    }
}
