<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;


class State extends Model
{
    use HasFactory;
    public $timestamps = false;



    protected $fillable = ["likes", "views", "article_id"];


    public function articles ()
    {
        return $this->belongsToMany(Article::class);
    }
}
