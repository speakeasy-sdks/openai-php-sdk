<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateCompletionResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateCompletionResponse $createCompletionResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createCompletionResponse = null;
		$this->statusCode = 0;
	}
}
