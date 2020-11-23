<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddCategoryTest extends DuskTestCase
{
    private $url = 'https://images.unsplash.com/photo-1601758175576-648226072e90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=640&q=80';

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddCategory()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('name', 'New Category')
                ->type('description', 'New description category')
                ->type('photo', $this->url)
                ->press('Сохранить')
                ->assertPathIs('/admin/category');
        });
    }

    public function testFailAddCategory()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                ->type('name', 'New Category')
                ->type('photo', $this->url)
                ->press('Сохранить')
                ->assertPathIs('/admin/category/create')
                ->assertSee('Поле Описание обязательно для заполнения.');
        });
    }
}
