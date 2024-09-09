<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'cover_image',
        'cover_image_alt'
    ];
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class,'post_jn_categories','post_id','category_id');
    }
}
