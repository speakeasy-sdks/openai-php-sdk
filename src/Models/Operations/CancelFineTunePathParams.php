<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CancelFineTunePathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=fine_tune_id')]
    public string $fineTuneId;
    
	public function __construct()
	{
		$this->fineTuneId = "";
	}
}
