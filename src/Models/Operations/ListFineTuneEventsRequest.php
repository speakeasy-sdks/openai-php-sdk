<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class ListFineTuneEventsRequest
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=fine_tune_id')]
    public string $fineTuneId;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=stream')]
    public ?bool $stream = null;
    
	public function __construct()
	{
		$this->fineTuneId = "";
		$this->stream = null;
	}
}
