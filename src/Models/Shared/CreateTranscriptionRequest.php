<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateTranscriptionRequest
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateTranscriptionRequestFile $file;
    
    #[SpeakeasyMetadata('multipartForm:name=language')]
    public ?string $language = null;
    
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
		$this->file = new \Openai\SDK\Models\Shared\CreateTranscriptionRequestFile();
		$this->language = null;
		$this->model = "";
		$this->prompt = null;
		$this->responseFormat = null;
		$this->temperature = null;
	}
}
