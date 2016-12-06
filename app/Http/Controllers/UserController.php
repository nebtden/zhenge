<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\DB;

// use App\Http\Controllers\Controller;

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

    /**
     * 用于生成优惠券
     *
     */
    public function voucher(){

        //数量
//        $id = 5;
//        //生成订单数,批量插入
//        $id =
        $flights = Article::all();

        foreach ($flights as $flight) {
            echo $flight->detail;
        }

        //批量插入语句
        for ($i=0;$i<=100;$i++){

            DB::insert('insert into la_coupon (code,is_used) values (?, ?)', [$this->createOrderSn(), 0]);
        }

    }

    public function createOrderSn(){
        return date("myh").rand(1000,9999);
    }


}