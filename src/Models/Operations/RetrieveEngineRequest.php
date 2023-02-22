<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveEngineRequest
{
    public RetrieveEnginePathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\RetrieveEnginePathParams();
	}
}
