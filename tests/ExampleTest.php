<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use MailTracking;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->seeEmailWasSent();
        // Mail::raw('Hello world', function($message) {
        //     $message->to('foo@example.com');
        //     $message->from('bar@example.com');
        // });

        // Mail::raw('Hello', function($message) {
        //     $message->to('foo@example.com');
        //     $message->from('bar@example.com');
        // });

        // $this->seeEmailWasSent();
        // $this->seeEmailsSent(2)
        // $this->seeEmailTo('foo@example.com')
        //      ->seeEmailFrom('x@example.com');
        // $this->seeEmailWasNotSent();
        // $this->seeEmailEquals('Hello world');
        // $this->seeEmailEquals('Hello world')->seeEmailContains('Hello');
    }
}
