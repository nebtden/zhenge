<?php

namespace App\Http\Controllers;

use App\Test;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
      //$client = new \Yar_Client("http://test.phalcon.com/test.php");
	 //$result = $client->api();
	 
		    $client = new \Yar_Client("http://test.phalcon.com/test/index");
		 $result = $client->hello();
		 echo $result;
		 exit();
    }
}