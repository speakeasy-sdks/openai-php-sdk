<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveFileResponse
{
    public string $contentType;
    
    public mixed $openAIFile = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->openAIFile = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
