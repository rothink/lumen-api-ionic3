<?php

namespace App\Observers;

use App\RestaurantVote;
use App\Restaurant;

class RestaurantVoteObserver
{
    public function creating(RestaurantVote $model)
    {
        $points = $model
            ->where('restaurant_id', $model->restaurant_id)
            ->avg('points');
        $restaurant = Restaurant::find($model->restaurant_id);

        $restaurant->points = $points;
        $restaurant->votes_qtd += 1;
        $restaurant->update();
    }

    public function updating(Address $model)
    {
        $this->setLatAndLong($model);
    }

    private function setLatAndLong($model)
    {
        $location = $model->address . ',' .
            $model->numer . '-' .
            $model->neighborhood . '-' .
            $model->city . '-' .
            $model->state . '-' .
            $model->address;

        $response = GeoLocation::getGeocodeFromGoogle($location);

        if(!empty($response->results) and is_array($response->results)) {
            $result = array_pop($response->results);
            $model->latitude = $result->geometry->location->lat;
            $model->longitude = $result->geometry->location->lng;
        }
    }

}