<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewsParsing;
use App\Models\Category;
use App\Models\News;
use App\Service\XmlParserService;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Source;
use XmlParser;


class AdminParserController extends Controller
{

    public function index()
    {

        $source = \App\Models\Source::all();

        foreach ($source as $item)
        {
            NewsParsing::dispatch($item); // Добавление задачи в очереь задач
        }

        return redirect()->route('admin')->with('success', 'Парсинг запущен');

    }
}
