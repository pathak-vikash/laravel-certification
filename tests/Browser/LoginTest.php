<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\Login;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testVisiteToPage(){
        
        $user = \App\User::where('email', 'vikashh.pathak@gmail.com')->first();

        if (!$user){
            $user = factory(\App\User::class)->create([
                'email' => 'vikashh.pathak@gmail.com',
            ]);
        }
        
        $this->browse(function ($browser) use ($user) {
            $browser->visit(new Login);
        });
    }

    public function testBasicExample()
    {
        $user = \App\User::where('email', 'vikashh.pathak@gmail.com')->first();

        if (!$user){
            $user = factory(\App\User::class)->create([
                'email' => 'vikashh.pathak@gmail.com',
            ]);
        }

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', '123654')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
