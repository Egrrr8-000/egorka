<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Article extends Model
{
    protected $fillable = [
        'title', 'status', 'desctription', 'user_id', 'url-foto'
    ];
}
