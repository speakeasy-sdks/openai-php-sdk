<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class ListModelsResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\ListModelsResponse $listModelsResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->listModelsResponse = null;
		$this->statusCode = 0;
	}
}
