<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateSearchPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=engine_id')]
    public string $engineId;
    
	public function __construct()
	{
		$this->engineId = "";
	}
}
