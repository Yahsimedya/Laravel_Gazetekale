<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;


//use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AuthorsPost extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'authors_id',
        'text',
        'title',
        'status',
        'keywords',
        'description',
    ];

    public function authors()
    {
        return $this->belongsTo(Authors::class);
    }
}
