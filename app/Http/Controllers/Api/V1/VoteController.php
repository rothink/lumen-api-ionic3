<?php
/**
 * Created by PhpStorm.
 * User: rothink
 * Date: 14/10/17
 * Time: 14:49
 */

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\RestaurantVote;

use Illuminate\Http\Request;

class VoteController extends Controller
{

    protected $model;

    protected $rules = [
        'points' => 'required',
        'comment' => 'required|min:3',
        'restaurant_id' => 'required'
    ];
    protected $messages = [
        'required' => ':attribute é obrigatório',
        'min' => ':attribute precisa de no mínimo :min caracteres'
    ];

    public function __construct(RestaurantVote $model)
    {
        $this->model = $model;
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules ?? [], $this->messages ?? []);

        $result = $this->model->create($request->all());
        return response()->json($result);
    }


}