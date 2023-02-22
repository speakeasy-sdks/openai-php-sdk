<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveFineTuneRequest
{
    public RetrieveFineTunePathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\RetrieveFineTunePathParams();
	}
}
