<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Article extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'quote',
        'photo',
        'tags',
        'article_cat_id',
        'created_by',
        'updated_by',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(ArticleCategory::class, 'article_cat_id', 'id');
    }
}
