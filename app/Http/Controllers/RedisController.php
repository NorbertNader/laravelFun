<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;

class RedisController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        Redis::set('name:'.$id, 'Norbert');
        
        $user = Redis::get('name:'.$id);

        return view('gettingredis', ['user' => $user]);
    }
}