<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateChatCompletionResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateChatCompletionResponse $createChatCompletionResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createChatCompletionResponse = null;
		$this->statusCode = 0;
	}
}
