<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class DeleteModelResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\DeleteModelResponse $deleteModelResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->deleteModelResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
