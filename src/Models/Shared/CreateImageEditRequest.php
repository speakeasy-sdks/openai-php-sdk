<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateImageEditRequest
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateImageEditRequestImage $image;
    
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public ?CreateImageEditRequestMask $mask = null;
    
    #[SpeakeasyMetadata('multipartForm:name=n')]
    public mixed $n = null;
    
    #[SpeakeasyMetadata('multipartForm:name=prompt')]
    public string $prompt;
    
    #[SpeakeasyMetadata('multipartForm:name=response_format')]
    public mixed $responseFormat = null;
    
    #[SpeakeasyMetadata('multipartForm:name=size')]
    public mixed $size = null;
    
    #[SpeakeasyMetadata('multipartForm:name=user')]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->image = new \Openai\SDK\Models\Shared\CreateImageEditRequestImage();
		$this->mask = null;
		$this->n = null;
		$this->prompt = "";
		$this->responseFormat = null;
		$this->size = null;
		$this->user = null;
	}
}
