<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function testvoice(Request $request)
    {
       $email = $request->input('email');
//return $email;
       $client = new Client();
      $api_key = 'ajynunebu4uq';
    $res = $client->get('https://api.cleantalk.org/?method_name=spam_check&auth_key='.$api_key.'&email='.$email);
return $res->getBody(); // 200
//echo $res->getBody();

  //      return "sarin";
    }
}
