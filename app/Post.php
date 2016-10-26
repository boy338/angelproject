<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Model\Category;

class Post extends Model
{

    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
