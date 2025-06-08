<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateCategoriesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser)  {
            $browser->visit('/login')
                ->type('email', 'gert.iopru@gmail.com')
                ->type('password', '0987654')
                ->press('Log in')
                ->assertPathIs('/')
                ->assertSee('CATEGORIES');

            $browser->visit('/admin/categories')
                ->clickLink('New category')
                ->type('@filament.forms.data.name', 'Test Category')
                ->press('Create');
        });
    }
}
