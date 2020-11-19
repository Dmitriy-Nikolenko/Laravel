<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddSourceTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddSource()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/source/create')
                ->type('name', 'New source')
                ->press('Сохранить')
                ->assertPathIs('/admin/source');
        });
    }

    public function testFailAddSource()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/source/create')
                ->press('Сохранить')
                ->assertPathIs('/admin/source/create')
                ->assertSee('Поле Название обязательно для заполнения.');
        });
    }
}
