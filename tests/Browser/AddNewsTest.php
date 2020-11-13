<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddNewsTest extends DuskTestCase
{
    private $url = 'https://images.unsplash.com/photo-1601758175576-648226072e90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=640&q=80';

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddNews()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title', 'NEW NEWS')
                ->type('photo', $this->url)
                ->type('preview', 'NEW PREVIEW')
                ->type('text', 'NEW BIG TEXT')
                ->select('category_id')
                ->select('source_id')
                ->press('Сохранить')
                ->assertPathIs('/admin/news');
        });
    }

    public function testFailAddNews()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('photo', $this->url)
                ->type('preview', 'NEW PREVIEW')
                ->type('text', 'NEW BIG TEXT')
                ->select('category_id')
                ->select('source_id')
                ->press('Сохранить')
                ->assertPathIs('/admin/news/create')
                ->assertSee('Поле Заголовок обязательно для заполнения.');
        });
    }
}
