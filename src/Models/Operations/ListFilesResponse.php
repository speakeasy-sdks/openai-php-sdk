<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class ListFilesResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\ListFilesResponse $listFilesResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->listFilesResponse = null;
		$this->statusCode = 0;
	}
}
