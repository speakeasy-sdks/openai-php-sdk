<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateAnswerResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\CreateAnswerResponse $createAnswerResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->createAnswerResponse = null;
		$this->statusCode = 0;
	}
}
