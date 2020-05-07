<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //$response = $this->get('/');
        $data = [
            'to' =>'eCCSI8ysnJctC3pgsfzrW_:APA91bHU3Up205KWwiuKKhDZJPkTHxmK3U20_48EXTXfkaP_saL6IDZuVHJ5CwS81_tua9R0tmVB41DaxmnIQe397_Rve4FBGugKd_ZTKSAsMjHcO0x7OlzKPJCYdfTLHNIyQPCvg_ig',
            'push_title' => 'Title',
            'push_body'  => 'User has been created!'
        ];
        $response = $this->post('/api/v1/faden/message/push',$data);
        $response->assertStatus(200);

        $data = [
            'to' =>'ali.salimiansas2@gmail.com',
            'title' => 'Title',
            'body'  => 'User has been created!',
            'sent_at' => 1938211
        ];
        $response = $this->post('/api/v1/faden/message/mail' ,$data);
        $response->assertStatus(200);

    }
}
