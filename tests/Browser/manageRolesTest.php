<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class manageRolesTest extends DuskTestCase{
    public $user;
    
    public function test_login(): void{
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->type('email', 'tp@gmail.com')
                    ->type('password', 'test1234')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }

    public function test_admin_acces_to_panelAdmin(): void{
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/panelAdmin')
                    ->assertSee('Utilisateur');
        });
    }

    public function test_admin_can_add_role(): void{
        $this->user = User::where('name', 'test')->where('email', 'test@gmail.com')->first();
        $this->browse(function (Browser $browser) {
            $browser->press('#AddRole')
                    ->assertSee('Nouveau Role')
                    ->select('user', $this->user->id)
                    ->select('role', '2')
                    ->press('Valider')
                    ->assertPathIs('/panelAdmin')
                    ->assertSee('tp')
                    ->assertSee('gestionnaire');
        });
    }

    public function test_admin_cannot_add_role_to_a_user_who_already_has_it(): void{
        $this->user = User::where('name', 'test')->where('email', 'test@gmail.com')->first();
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/addRole')
                    ->assertSee('Nouveau Role')
                    ->select('user', $this->user->id)
                    ->select('role', '2')
                    ->press('Valider')
                    ->assertPathIs('/addRole')
                    ->assertSee('Nouveau Role');
        });
    }

    public function test_admin_can_delete_a_role(): void{
        $this->user = User::where('name', 'test')->where('email', 'test@gmail.com')->first();
        $this->browse(function (Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/panelAdmin')
                    ->press("#btn" . $this->user->id);
        });
    }
}
