<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    public function test_user_can_login_with_valid_credentials(): void
    {
        $this->browse(function (Browser $browser)  {
            $browser->visit('/login')
                ->type('email', 'gert.iopru@gmail.com')
                ->type('password', '0987654') //
                ->press('Log in')
                ->assertPathIs('/')
                ->assertSee('CATEGORIES');
        });
    }
}
