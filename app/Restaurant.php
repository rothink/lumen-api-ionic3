<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Address;

class Restaurant extends Model
{
    protected $fillable = ['name', 'description', 'photo', 'phone'];
    protected $appends = ['photo_full_url'];

    protected function getPhotoFullUrlAttribute()
    {
        if($this->attributes['photo']) {
            return 'https://s3-'.env('AWS_REGION').'.amazonaws.com/'.env('AWS_BUCKET').'/restaurant/'.$this->attributes['photo'];
        } else {
            return null;
        }
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}