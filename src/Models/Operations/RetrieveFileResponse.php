<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveFileResponse
{
    public string $contentType;
    
    public mixed $openAIFile = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->openAIFile = null;
		$this->statusCode = 0;
	}
}
