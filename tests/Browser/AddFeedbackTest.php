<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddFeedbackTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAddFeedback()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/feedback')
                ->type('user', 'New user')
                ->type('feedback', 'New feedback')
                ->press('Отправить')
                ->assertPathIs('/feedback');

        });
    }

    public function testFailAddFeedback()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/feedback')
                ->type('user', 'New user')
                ->press('Отправить')
                ->assertPathIs('/feedback')
                ->assertSee('Поле Комментарий обязательно для заполнения.');
        });
    }
}
