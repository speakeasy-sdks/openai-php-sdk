<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateClassificationResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateClassificationResponse $createClassificationResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createClassificationResponse = null;
		$this->statusCode = 0;
	}
}
