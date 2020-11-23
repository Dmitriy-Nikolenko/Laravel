<?php

namespace App\Jobs;

use App\Models\Source;
use App\Service\XmlParserService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParsing implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Source
     */
    private $source;

    /**
     * Create a new job instance.
     *
     * @param Source $source
     */
    public function __construct(Source $source)
    {
        $this->source = $source;
    }

    /**
     * Execute the job.
     *
     * @param XmlParserService $service
     * @return void
     */
    public function handle(XmlParserService $service)
    {
        $savedNews = $service->parse($this->source);
        echo sprintf('%s // %s новых новостей%s', $this->source->link_rss, $savedNews, PHP_EOL);
    }
}
