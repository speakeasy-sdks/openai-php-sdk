<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateImageVariationRequest
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateImageVariationRequestImage $image;
    
    #[SpeakeasyMetadata('multipartForm:name=n')]
    public mixed $n = null;
    
    #[SpeakeasyMetadata('multipartForm:name=response_format')]
    public mixed $responseFormat = null;
    
    #[SpeakeasyMetadata('multipartForm:name=size')]
    public mixed $size = null;
    
    #[SpeakeasyMetadata('multipartForm:name=user')]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->image = new \Openai\SDK\Models\Shared\CreateImageVariationRequestImage();
		$this->n = null;
		$this->responseFormat = null;
		$this->size = null;
		$this->user = null;
	}
}
