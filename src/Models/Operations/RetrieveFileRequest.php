<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveFileRequest
{
    public RetrieveFilePathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\RetrieveFilePathParams();
	}
}
