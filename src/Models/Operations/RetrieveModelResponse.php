<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveModelResponse
{
    public string $contentType;
    
    public mixed $model = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->model = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
