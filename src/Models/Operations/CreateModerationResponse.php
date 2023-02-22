<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateModerationResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateModerationResponse $createModerationResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createModerationResponse = null;
		$this->statusCode = 0;
	}
}
