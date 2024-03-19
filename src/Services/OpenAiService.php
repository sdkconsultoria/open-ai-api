<?php

namespace Sdkconsultoria\OpenAiApi\Services;

abstract class OpenAiService
{
    protected string $graph_url = 'https://api.openai.com/';

    public function __construct()
    {
        $this->graph_url .= config('openai.api_version').'/';
    }
}
