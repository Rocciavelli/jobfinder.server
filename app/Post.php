<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_date',
        'status',
        'post_type',
        'is_featured'
    ];

    /**
     * Relationship.
     *
     * @var array
     */

    public function job() {
        return $this->hasOne(Job::class);
    }
}
