<?php

namespace Tests\Feature\Twitter;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TwitterTest extends TestCase
{
    /**
     *  @return void
     */
    public function testTwitterLogin()
    {
        $response = $this->post('/api/user/login-twitter');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user_id',
            'token'
        ]);
    }
    
    public function testTwitterTimeLine()
    {
        $response = $this->get('/api/twitter/time-line');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data'=>[
                '*' => [
                    'tweet_id',
                    'tweet_content'
               ]
            ] 
        ]);
    }

    public function testTwitterPost()
    {
        $response = $this->post('/api/twitter/post');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user_id',
            'tweet_id',
            'tweet_content'
        ]);
    }

    public function testTwitterReply()
    {
        $response = $this->post('/api/twitter/reply');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user_id',
            'tweet_id' 
        ]);
    }

    public function testTwitterRetweet()
    {
        $response = $this->post('/api/twitter/retweet');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user_id',
            'tweet_id' 
        ]);
    }

    public function testTwitterStar()
    {
        $response = $this->post('/api/twitter/star');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user_id',
            'tweet_id' 
        ]);
    }

    public function testTwitterThread()
    {
        $response = $this->post('/api/twitter/thread');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'user_id',
            'tweet_id' 
        ]);
    }


}
