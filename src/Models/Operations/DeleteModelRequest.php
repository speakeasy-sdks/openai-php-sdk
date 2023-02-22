<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class DeleteModelRequest
{
    public DeleteModelPathParams $pathParams;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\DeleteModelPathParams();
	}
}
