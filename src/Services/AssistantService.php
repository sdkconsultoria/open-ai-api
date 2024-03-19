<?php

namespace Sdkconsultoria\OpenAiApi\Services;

use Illuminate\Support\Facades\Http;

class AssistantService extends OpenAiService
{
    public function __construct()
    {
        parent::__construct();
        $this->graph_url .= 'assistants';
    }

    public function loadFromOpenAi()
    {
        return Http::withToken(config('openai.token'))
            ->withHeader('OpenAI-Beta', 'assistants=v1')
            ->throw()
            ->get($this->graph_url)
            ->json();
    }
}
