<?php
namespace VahidTalebi\CurrentsNews;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class CurrentsNews
{
    public static function getNews()
    {
        $client = config('currentsnews.api_key');

        return $client;
    }
}
