<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddOrderTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddOrder()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/order')
                ->type('user', 'New user')
                ->type('phone', '7864329023148743')
                ->type('email', 'asdf@klfds.ru')
                ->type('info', 'New info For Order')
                ->press('Отправить')
                ->assertPathIs('/order');
        });
    }

    public function testFailAddOrder()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/order')
                ->type('user', 'New user')
                ->type('email', 'asdf@klfds.ru')
                ->type('info', 'New info For Order')
                ->assertPathIs('/order')
                ->press('Отправить')
                ->assertSee('Поле Телефон обязательно для заполнения.');
        });
    }
}
