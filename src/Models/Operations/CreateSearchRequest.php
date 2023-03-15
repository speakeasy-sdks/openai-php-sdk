<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateSearchRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Openai\SDK\Models\Shared\CreateSearchRequest $createSearchRequest;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=engine_id')]
    public string $engineId;
    
	public function __construct()
	{
		$this->createSearchRequest = new \Openai\SDK\Models\Shared\CreateSearchRequest();
		$this->engineId = "";
	}
}
