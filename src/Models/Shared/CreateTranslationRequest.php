<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateTranslationRequest
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateTranslationRequestFile $file;
    
    #[SpeakeasyMetadata('multipartForm:name=model')]
    public string $model;
    
    #[SpeakeasyMetadata('multipartForm:name=prompt')]
    public ?string $prompt = null;
    
    #[SpeakeasyMetadata('multipartForm:name=response_format')]
    public ?string $responseFormat = null;
    
    #[SpeakeasyMetadata('multipartForm:name=temperature')]
    public ?float $temperature = null;
    
	public function __construct()
	{
		$this->file = new \Openai\SDK\Models\Shared\CreateTranslationRequestFile();
		$this->model = "";
		$this->prompt = null;
		$this->responseFormat = null;
		$this->temperature = null;
	}
}
