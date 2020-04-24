<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\category');
    }
    public function tags()
    {
        return $this->hasMany('App\tag');
    }
    public function articleview()
    {
        return $this->hasMany('App\articleview');
    }
    public function imagepath()
    {
        return '/storage/article/'.$this->image;
    }
    public function path()
    {
        return '/article/'.$this->id.'/'.$this->slug_title;
    }
}
