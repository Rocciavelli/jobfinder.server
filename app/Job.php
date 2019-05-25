<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'salarypackage',
        'qualification',
        'published_at',
        'author_id',
        'category_id',
        'post_id'
    ];

    /**
     * Relationship.
     *
     * @var string
     */

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Industry::class);
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
