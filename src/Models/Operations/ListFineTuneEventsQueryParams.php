<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class ListFineTuneEventsQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=stream')]
    public ?bool $stream = null;
    
	public function __construct()
	{
		$this->stream = null;
	}
}
