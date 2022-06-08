<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proprieteArticle extends Model
{
    use HasFactory;
    protected $table = "propriete_articles";
    public function type()
    {
        return $this->belongsTo(TypeArticle::class, 'type_article_id', 'id');
    }
}
