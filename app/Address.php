<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 14/10/17
 * Time: 00:09
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['cep', 'address', 'number', 'city', 'neighborhood', 'state', 'complement'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}