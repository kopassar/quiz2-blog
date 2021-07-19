<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    

    protected $table = "tb_post";

    protected $primaryKey = 'post_id';

    protected $fillable = ['post_tanggal', 'post_slug', 'post_title', 'post_ket', 'cat_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
