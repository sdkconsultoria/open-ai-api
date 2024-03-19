<?php

namespace Sdkconsultoria\OpenAiApi\Http\Controllers;

use Sdkconsultoria\OpenAiApi\Lib\Assistant\LoadFromOpenApi;
use Sdkconsultoria\OpenAiApi\Models\Assistant;
use Illuminate\Routing\Controller;

class AssistantController extends Controller
{
    protected $resource = Assistant::class;

    public function loadFromOpenAi()
    {
        $service = resolve(LoadFromOpenApi::class);

        return $service->loadFromOpenAi();
    }
}
