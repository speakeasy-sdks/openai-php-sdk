<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveEngineResponse
{
    public string $contentType;
    
    public mixed $engine = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->engine = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
