<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 14/10/17
 * Time: 14:49
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\ApiControllerTrait;
use App\Http\Controllers\Controller;
use App\RestaurantPhoto;
use Illuminate\Http\Request;

class RestaurantPhotosController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $rules = [
        'url' => 'required',
        'restaurant_id' => 'required'
    ];
    protected $messages = [
        'required' => ':attribute é obrigatório'
    ];

    public function __construct(RestaurantPhoto $model)
    {
        $this->model = $model;
    }

    public function index(Request $request, $id)
    {
        $result = $this->model
            ->where('restaurant_id', $id)
            ->get();

        return response()->json($result);
    }
}