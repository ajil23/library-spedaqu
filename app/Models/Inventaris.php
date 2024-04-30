<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = "inventaris";
    protected $primaryKey = 'id';
    protected $fillable = ['buku_id', 'nama', 'kondisi_sebelum', 'kondisi_sesudah', 'peminjaman', 'pengembalian'];

    public function buku(){
        return $this->belongsTo(Buku::class,'buku_id','id');
    }
}
