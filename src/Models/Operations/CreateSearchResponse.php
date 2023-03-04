<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateSearchResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateSearchResponse $createSearchResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createSearchResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
