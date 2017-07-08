<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
/**
* Show the profile for the given user.
*
* @param  Request  $request
* @param  int  $id
* @return Response
*/
public function show(Request $request, $id)
{
$value = $request->session()->get('key');

//
}
}