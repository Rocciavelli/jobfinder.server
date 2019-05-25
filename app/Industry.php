<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
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
        'name',
        'description'
    ];

    /**
     * Relationship.
     *
     * @var array
     */

    public function jobs()
    {
      return $this->hasMany(Job:class);
    }
}
