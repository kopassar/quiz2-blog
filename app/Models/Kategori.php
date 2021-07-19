<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "tb_kategori";

    protected $primaryKey = 'cat_id';

    protected $fillable = ['cat_nama', 'cat_ket'];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
