<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
    ];

    /**
     * Get the author that owns the Post
     *
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the category that owns the Post
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get like ratio
     *
     * @return void
     */
    public function getLikeRateAttribute()
    {
        $likedScore = ($this->likes / ($this->likes + $this->dislikes)) * 10;
        return round($likedScore, 1);
    }

    /**
     * Get formatted date
     *
     * @return void
     */
    public function getFormattedPublishedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->published_at)->format('d F Y');
    }

    /**
     * Get read time
     *
     * @return void
     */
    public function getReadTimeAttribute()
    {
        return round(str_word_count($this->content) / 180);
    }
}
