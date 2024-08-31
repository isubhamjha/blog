<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategories extends Model
{
    use HasFactory;
    protected $table = 'post_jn_categories';
    protected $fillable = [
      'post_id',
      'category_id',
    ];
//    public function post(): \Illuminate\Database\Eloquent\Relations\BelongsTo
//    {
//       return $this->belongsTo('App\Models\Post');
//    }
//    public function category()
//    {
//        return $this->belongsTo('App\Models\Category');
//    }
}
