<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedPage extends Model
{
    use HasFactory;
    protected $table = 'fixedpage'; // Add this line to specify the table

    protected $fillable = [
        'id',
        'title',
        'content',
        'keyword',
        'description',
        'status',
    ];
}
