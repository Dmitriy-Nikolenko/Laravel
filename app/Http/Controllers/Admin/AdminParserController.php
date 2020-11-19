<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Source;
use XmlParser;


class AdminParserController extends Controller
{

    public function index()
    {
        $category = Category::query()->get()->keyBy('name')->toArray();
        $news = News::query()->get()->keyBy('title')->toArray();
        $source = \App\Models\Source::all();
        foreach ($source as $item) {
            $xmlParser = XmlParser::load($item->link_rss);
            $parseData = $xmlParser->parse([
                'title' => ['uses' => 'channel.title'],
                'link' => ['uses' => 'channel.link'],
                'description' => ['uses' => 'channel.description'],
                'image' => ['uses' => 'channel.image.url'],
                'news' => ['uses' => 'channel.item[title,link,description]']
            ]);
            if (!array_key_exists($parseData['title'], $category)) {
                Category::create([
                    'name' => $parseData['title'],
                    'description' => $parseData['description'],
                    'photo' => $parseData['image'],
                    'source_id' => $item->id,

                ]);
            }
            $categoryId = \App\Models\Category::all();
            foreach ($categoryId as $id) {
                if ($id->source_id == $item->id) {
                    foreach ($parseData['news'] as $value) {

                        if (!array_key_exists($value['title'], $news)) {
                            News::create([
                                'title' => $value['title'],
                                'preview' => $value['description'],
                                'text' => $value['description'],
                                'photo' => $value['link'],
                                'category_id' => $id->id,
                                'source_id' => $item->id,
                            ]);
                        }

                    }
                }


            }


        }

        return redirect()->route('admin')->with('success', 'Парсинг прошел успешно');

    }
}
