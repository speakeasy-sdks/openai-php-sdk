<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateSearchRequest
{
    public CreateSearchPathParams $pathParams;
    
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Openai\SDK\Models\Shared\CreateSearchRequest $request;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\CreateSearchPathParams();
		$this->request = new \Openai\SDK\Models\Shared\CreateSearchRequest();
	}
}
