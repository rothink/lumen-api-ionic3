<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 14/10/17
 * Time: 14:49
 */

namespace App\Http\Controllers\Api\V1;

use App\Dish;
use App\Http\Controllers\ApiControllerTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'photo' => 'required',
        'restaurant_id' => 'required'
    ];
    protected $messages = [
        'required' => ':attribute é obrigatório'
    ];

    public function __construct(Dish $model)
    {
        $this->model = $model;
    }
}