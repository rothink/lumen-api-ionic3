<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 14/10/17
 * Time: 14:41
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantPhoto extends Model
{
    protected $fillable = ['url', 'restaurant_id'];
    protected $appends = ['full_url'];

    protected function getFullUrlAttribute()
    {
        if($this->attributes['url']) {
            return 'https://s3-'.env('AWS_REGION').'.amazonaws.com/'.env('AWS_BUCKET').'/restaurant_photo/'.$this->attributes['url'];
        } else {
            return null;
        }
    }
}