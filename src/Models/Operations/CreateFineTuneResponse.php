<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateFineTuneResponse
{
    public string $contentType;
    
    public mixed $fineTune = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->fineTune = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
