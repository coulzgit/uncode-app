<?php

namespace Tests;

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

//use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Log;

abstract class UncodeTest extends TestCase
{
    use DatabaseTransactions;

    public function test_create_user()
    {
        //$this->assertTrue(true);

     //    $request = Request::create('/accounts/1/adduser', 'GET');

	    // $userController = new UserController();
    	// $response = $userController->create($request);

    	// Log::info($response->getStatusCode());//$response->getStatusCode()

    	//$response = $this->call('GET', '/accounts/1/adduser');

        //$this->assertTrue($response->isOk());
        //Log::info("response: ".$response);

        $response = $this->client->request('GET', '/accounts/1/adduser');

        Log::info("response: ".$response);


        $response = $this->action('GET', 'UserController@create');

        $result = $response->original;
        Log::info("result: ".$result);

        $this->assertEquals('true', $result);




    }
}
