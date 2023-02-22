<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateEmbeddingResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateEmbeddingResponse $createEmbeddingResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createEmbeddingResponse = null;
		$this->statusCode = 0;
	}
}
