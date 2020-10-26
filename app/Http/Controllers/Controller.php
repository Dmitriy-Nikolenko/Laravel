<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $news = [
        'Медицина' => [
            1 => [
                'id' => 1,
                'title' => 'Тема новости о медицине 1',
                'text' => 'Текст новости о медицине 1'
            ],
            2 => [
                'id' => 2,
                'title' => 'Тема новости о медицине 2',
                'text' => 'Текст новости о медицине 2'
            ],
            3 => [
                'id' => 3,
                'title' => 'Тема новости о медицине 3',
                'text' => 'Текст новости о медицине 3'
            ],
            4 => [
                'id' => 4,
                'title' => 'Тема новости о медицине 4',
                'text' => 'Текст новости о медицине 4'
            ]
        ],
        'Спорт' => [
            1 => [
                'id' => 1,
                'title' => 'Тема новости о спорте 1',
                'text' => 'Текст новости о спорте 1'
            ],
            2 => [
                'id' => 2,
                'title' => 'Тема новости о спорте 2',
                'text' => 'Текст новости о спорте 2'
            ],
            3 => [
                'id' => 3,
                'title' => 'Тема новости о спорте 3',
                'text' => 'Текст новости о спорте 3'
            ],
            4 => [
                'id' => 4,
                'title' => 'Тема новости о спорте 4',
                'text' => 'Текст новости о спорте 4'
            ]
        ],
        'Политика' => [
            1 => [
                'id' => 1,
                'title' => 'Тема новости о политике 1',
                'text' => 'Текст новости 1'
            ],
            2 => [
                'id' => 2,
                'title' => 'Тема новости о политике 2',
                'text' => 'Текст новости о политике 2'
            ],
            3 => [
                'id' => 3,
                'title' => 'Тема новости о политике 3',
                'text' => 'Текст новости о политике 3'
            ],
            4 => [
                'id' => 4,
                'title' => 'Тема новости о политике 4',
                'text' => 'Текст новости о политике 4'
            ]
        ],

        'Происшествия' => [
            1 => [
                'id' => 1,
                'title' => 'Тема новости о происшествиях 1',
                'text' => 'Текст новости о происшествиях 1'
            ],
            2 => [
                'id' => 2,
                'title' => 'Тема новости о происшествиях 2',
                'text' => 'Текст новости о происшествиях 2'
            ],
            3 => [
                'id' => 3,
                'title' => 'Тема новости о происшествиях 3',
                'text' => 'Текст новости о происшествиях 3'
            ],
            4 => [
                'id' => 4,
                'title' => 'Тема новости о происшествиях 4',
                'text' => 'Текст новости о происшествиях 4'
            ]
        ]

    ];

 public function getCategory () {
     $category = [];
     foreach ($this->news as $key => $value) {
         array_push($category, $key);
     }
     return $category;
 }

    public function getNews($category) {
     $news = [];
     foreach ($this->news as $key => $value) {
         if ($key == $category) {
             foreach ($value as $item) {
                 array_push($news, $item);
             }
             return $news;
         }
     }
    }

    public function getNewsForCategoryId ($category, $id) {
        $news = [];
        foreach ($this->news as $key => $value) {
            if ($key == $category) {
                foreach ($value as $item) {
                    if($item['id'] == $id) {
                        array_push($news, $item);
                    }
                }
            }
        }
        return $news;
 }
}
