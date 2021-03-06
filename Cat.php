<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['name','date_of_birth','breed_id']; //= 1 cai array
    
    public function breed()
    {
      return $this->belongsTo('Furbook\Breed');
    }
}
