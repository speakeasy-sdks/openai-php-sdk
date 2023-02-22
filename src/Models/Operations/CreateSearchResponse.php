<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateSearchResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateSearchResponse $createSearchResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createSearchResponse = null;
		$this->statusCode = 0;
	}
}
