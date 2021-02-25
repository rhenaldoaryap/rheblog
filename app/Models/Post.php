<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Post extends Model implements Viewable
{
    use InteractsWithViews;
    protected $guarded = ['created_at', 'updated_at'];

    protected $dates = [
      'published_at',
    ];

    public function category()
    {
      return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
      return $this->belongsToMany('App\Models\Tag');
    }

    use HasFactory;
}
