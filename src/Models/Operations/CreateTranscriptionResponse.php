<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateTranscriptionResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateTranscriptionResponse $createTranscriptionResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createTranscriptionResponse = null;
		$this->statusCode = 0;
	}
}
