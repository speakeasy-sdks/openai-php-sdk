<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateImageVariationRequest
{
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public \Openai\SDK\Models\Shared\CreateImageVariationRequest $request;
    
	public function __construct()
	{
		$this->request = new \Openai\SDK\Models\Shared\CreateImageVariationRequest();
	}
}
