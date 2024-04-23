<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $table = "ebook";
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'kategori_id', 'halaman', 'image', 'pdf'];

    public function kategori(){
        return $this->belongsTo(Category::class,'kategori_id','id');
    }
}
