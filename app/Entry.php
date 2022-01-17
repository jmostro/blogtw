<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    //mutator for slug
    public function setTitleAttribute($value){       
        $this->attributes['title'] =$value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function getFullSlug(){
        return $this->slug.'-'.$this->id;
    }
}
