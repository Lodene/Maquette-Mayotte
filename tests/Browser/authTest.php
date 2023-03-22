<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class authTest extends DuskTestCase{

    private $user = [
        'name' => 'test',
        'email' => 'test@gmail.com',
        'password' => 'password1234'
    ];

    public function test_create_user_with_bad_data(): void{
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/')
                    ->click('#register')
                    ->assertSee('Register')
                    ->type('name', $this->user['name'])
                    ->type('email', $this->user['email'])
                    ->type('password', $this->user['password'])
                    ->type('password_confirmation', 'test12345678')
                    ->press('Register')
                    ->assertSee('The password field confirmation does not match.')
                    ->screenshot('End');
        });
    }

    // public function test_create_user(): void{
    //     $this->browse(function (Browser $browser) {
    //         $browser->screenshot('start')
    //                 ->type('password', $this->user['password'])
    //                 ->type('password_confirmation', $this->user['password'])
    //                 ->screenshot('allData')
    //                 ->press('Register')
    //                 ->screenshot('btnpressed')
    //                 ->assertSee('You are logged in!');
    //     });
    // }

    public function test_user_cannot_login_with_bad_data(): void{
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->type('email', 'tp@gmail.com')
                    ->type('password', 'test123')
                    ->press('Login')
                    ->assertSee('These credentials do not match our records.');
        });
    }

    public function test_user_can_login(): void{
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->type('email', 'tp@gmail.com')
                    ->type('password', 'test1234')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }

    public function test_user_can_logout(): void{
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/home')
                    ->click('#navbarDropdown')
                    ->click('#Logout')
                    ->assertPathIs('/');
        });
    }
}