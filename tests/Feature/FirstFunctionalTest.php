<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FirstFunctionalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWelcome()
    {
       $response = $this->get('/');
       $response->assertSeeText('Добро пожаловать');
        $response->assertStatus(200);
    }

    public function testCategory()
    {
        $response = $this->json('GET', '/category');
        $this->assertNotEmpty($response['category']);
    }

    public function testComment()
    {
        $response = $this->get('/comment');
        $response->assertSeeText('Сохранить');
        $response->assertSeeText('Отмена');
        $response->assertCookie('XSRF-TOKEN');
    }

    public function testOrder()
    {
        $response = $this->get('/order');
        $response->assertSeeText('Сохранить');
        $response->assertSeeText('Отмена');
        $response->assertCookieNotExpired('XSRF-TOKEN');
        $response->assertSuccessful();

    }

    public function testAdminNews()
    {
        $response = $this->get('/admin/news');
        $response->assertSeeText('Добавить новость');
        $this->assertNotEmpty('news');

    }

    public function testNews()
    {
        $response = $this->get('/news/category/1');
        $response->assertSeeText('Медицина');
        $response2 = $this->get('/news/category/2');
        $response2->assertSeeText('Спорт');
        $response3 = $this->get('/news/category/3');
        $response3->assertSeeText('Политика');
        $response4 = $this->get('/news/category/4');
        $response4->assertSeeText('Происшествия');
    }

}
