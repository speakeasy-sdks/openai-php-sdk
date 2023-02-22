<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CancelFineTuneRequest
{
    public CancelFineTunePathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\CancelFineTunePathParams();
	}
}
