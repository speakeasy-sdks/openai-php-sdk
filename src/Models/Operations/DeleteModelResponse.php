<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class DeleteModelResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\DeleteModelResponse $deleteModelResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->deleteModelResponse = null;
		$this->statusCode = 0;
	}
}
