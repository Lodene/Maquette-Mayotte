<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\AdminController;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\Factory;



class adminTest extends TestCase{
    public function testMenuReturnsViewWithData(){
        $controller = new AdminController();

        // Crée des données de test
        $data = [
            ['fruit' => 'pomme', 'couleur' => 'rouge'],
            ['fruit' => 'banane', 'couleur' => 'jaune'],
            ['fruit' => 'orange', 'couleur' => 'orange']
        ];
        $jsonData = json_encode($data);
        file_put_contents(public_path('data.json'), $jsonData);

        // Appelle la fonction à tester
        $response = $controller->menu('fruit');

        // Vérifie que la vue est retournée avec les données appropriées
        $this->assertIsObject($response);
        $this->assertArrayHasKey('datas', $response->getData());
        $this->assertArrayHasKey('item', $response->getData());
        $this->assertEquals(['pomme', 'banane', 'orange'], $response->getData()['datas']);
        $this->assertEquals('fruit', $response->getData()['item']);

        // Nettoie les données de test
        unlink(public_path('data.json'));
    }


    public function testAddRoleReturnsViewWithData()
    {
        $controller = new AdminController();

        // Crée des données de test
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $role1 = Role::create(['name' => 'testRole1']);
        $role2 = Role::create(['name' => 'testRole2']);

        // Appelle la fonction à tester
        $response = $controller->addRole();

        // Vérifie que la vue est retournée avec les données appropriées
        $this->assertIsObject($response);
        $this->assertArrayHasKey('users', $response->getData());
        $this->assertInstanceOf(User::class, $response->getData()['users'][0]);
        $this->assertArrayHasKey('roles', $response->getData());
        $this->assertInstanceOf(Role::class, $response->getData()['roles'][0]);
   
        $lastTwo = array_slice($response->getData()['users']->pluck('id')->toArray(), -2);
        $this->assertEquals([$user1->id, $user2->id], [$lastTwo[0], $lastTwo[1]]);

        $lastTwo = array_slice($response->getData()['roles']->pluck('id')->toArray(), -2);
        $this->assertEquals([$role1->id, $role2->id], [$lastTwo[0], $lastTwo[1]]);

        // Nettoie les données de test
        $user1->delete();
        $user2->delete();
        $role1->delete();
        $role2->delete();
    }
    
    public function testAddRolePostAddsRoleIfUserDoesNotHaveIt()
    {
        $controller = new AdminController();
    
        // Crée des données de test
        $user = User::factory()->create();
        $role = Role::create(['name' => 'editor']);
        $request = new Request([
            'user' => $user->id,
            'role' => $role->id
        ]);
    
        // Appelle la fonction à tester
        $response = $controller->addRolePost($request);
    
        // Vérifie que l'utilisateur a maintenant le rôle et est redirigé avec un message de succès
        $this->assertTrue($user->hasRole('editor'));
        $this->assertNotNull($response->getSession()->get('succes'));
        $this->assertEquals('Role ajouté', $response->getSession()->get('succes'));
        $this->assertEquals(302, $response->getStatusCode());
    
        // Nettoie les données de test
        $user->delete();
        $role->delete();
    }
}
