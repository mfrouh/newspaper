<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blockuser extends Model
{
    protected $fillable=['user_id','start','end'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function active()
    {
       if ($this->start < now() && $this->end > now()) {
           return true;
       }
       return false;
    }
}
