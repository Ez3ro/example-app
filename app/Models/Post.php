<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable= [
    'title', 
    'slug',
    'thumbnail',
    'body',
    'active',
    'published_at',
    'user_id',
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);



        # code...
    }

    public function categories():belongsToMany
    {

        return $this->belongsToMany(category::class);
        # code...
    }
    public function getFormattedDate()
    {
        return $this->published_at->format('F jS Y');
        # code...
    }

    public function shortBody(): string
    {

        return Str::words(strip_tags($this->body), 20);
        # code...
    }
    


}
