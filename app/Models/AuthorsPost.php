<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use CyrildeWit\EloquentViewable\InteractsWithViews;

//use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AuthorsPost extends Model implements Viewable
{
    use HasFactory;
    use InteractsWithViews;

    protected $fillable = [
        'id',
        'authors_id',
        'text',
        'title',
        'status',
        'keywords',
        'description',
    ];

    public function author()
    {
        return $this->belongsTo(Authors::class, 'authors_id');
    }
}
