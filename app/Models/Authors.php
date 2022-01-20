<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\AuthorsPost;
class Authors extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'image',
        'status',
        'mail',
        'facebook',
        'twitter',
        'youtube',

    ];
    public function authorposts()
    {
        return $this->belongsTo(AuthorsPost::class,'authors_id','id')->orderBy('authors_id');
//        return $this->belongsToMany(AuthorsPost::class, 'authors_id');

    }
}
