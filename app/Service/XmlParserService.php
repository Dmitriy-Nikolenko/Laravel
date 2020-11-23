<?php


namespace App\Service;


use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use XmlParser;

class XmlParserService
{
    /**
     * @param Source $source
     * @return int
     */
    public function parse(Source $source)
    {
        $news = News::query()->get()->keyBy('title')->toArray();
        $category = Category::query()->get()->keyBy('name')->toArray();
        $categoryInsert = [];
            $xmlParser = XmlParser::load($source->link_rss);
            $parseData = $xmlParser->parse([
                'title' => ['uses' => 'channel.title'],
                'link' => ['uses' => 'channel.link'],
                'description' => ['uses' => 'channel.description'],
                'image' => ['uses' => 'channel.image.url'],
                'news' => ['uses' => 'channel.item[title,link,description]']
            ]);
            if (!array_key_exists($parseData['title'], $category)) {
                $categoryInsert[] = [
                    'name' => $parseData['title'],
                    'description' => $parseData['description'],
                    'photo' => $parseData['image'],
                    'source_id' => $source->id,

                ];
            }
        Category::query()->insert($categoryInsert);

            $categoryId = Category::all();
            $newsInsert = [];
            foreach ($categoryId as $id) {
                if ($id->source_id == $source->id) {
                    foreach ($parseData['news'] as $value) {

                        if (!array_key_exists($value['title'], $news)) {
                            $newsInsert[] = [
                                'title' => $value['title'],
                                'preview' => $value['description'],
                                'text' => $value['description'],
                                'photo' => $value['link'],
                                'category_id' => $id->id,
                                'source_id' => $source->id,
                            ];

                        }
                    }

                }
            }
        News::query()->insert($newsInsert);
        return count($newsInsert);

    }

}
