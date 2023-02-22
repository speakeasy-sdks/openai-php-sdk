<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateCompletionRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Openai\SDK\Models\Shared\CreateCompletionRequest $request;
    
	public function __construct()
	{
		$this->request = new \Openai\SDK\Models\Shared\CreateCompletionRequest();
	}
}
