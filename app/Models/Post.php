<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // kolom yang boleh diisi
    // protected $fillable=[
    //     'title',
    //     'excerpt',
    //     'body'
    // ];
    protected $guarded=
    [
        'id'
    ];

    //menghubungkan post dengan category 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
