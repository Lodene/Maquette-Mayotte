<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\Concerns\MakesAssertions;


class testTest extends DuskTestCase
{
    /**
     * A basic feature test example.
    */
    public function testSelectOption(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/example-page')
                    ->select('select[name="user"]', 'Option 1')
                    ->assertSelected('select[name="user"]', 'Option 1');
        });
    }
}
