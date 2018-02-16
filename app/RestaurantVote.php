<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 27/01/18
 * Time: 13:24
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantVote extends Model
{
    protected $fillable = ['points', 'comment', 'reply', 'restaurant_id'];
}