<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateEditResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateEditResponse $createEditResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createEditResponse = null;
		$this->statusCode = 0;
	}
}
