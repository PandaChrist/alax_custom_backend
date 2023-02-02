<?php
require_once 'vendor/autoload.php';


class ApiTest{

    public function test_api_helloworld()
    {
        $response= [
            "data"=> "On est a ce niveau" 
        ];

        return 'moi';

        Flight::json($response);

        // $response = $this->make_request("POST", "/uploadFile");

        // $this->assertEquals(200, $response->getStatusCode());
        // $this->assertContains("application/json", $response->getHeader('Content-Type')[0]);


        // $body = $response->getBody()->getContents();

        // $json_result = json_encode(['data' => 'Hello World!']);



        // $this->assertEquals($json_result, $body);
    }
    public static function sayHello(){
        echo 'Hellooooo';
        return;
    }
}