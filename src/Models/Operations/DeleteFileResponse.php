<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class DeleteFileResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\DeleteFileResponse $deleteFileResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->deleteFileResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
