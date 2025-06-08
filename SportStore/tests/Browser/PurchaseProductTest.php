<?php

namespace Tests\Browser;

use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Support\Facades\Hash;

class PurchaseProductTest extends DuskTestCase
{
    /** @test */
    public function user_can_add_product_to_cart_and_checkout(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'testuser@example.com')
                ->type('password', 'password123')
                ->press('Log in')
                ->assertPathIs('/')
                ->visit('/')
                ->assertSee('CATEGORIES')
                ->click('.fi-rs-shopping-cart-add')
                ->pause(1000)
                ->visit('/cart')
                ->assertSee('Protein');
        });
    }
}
