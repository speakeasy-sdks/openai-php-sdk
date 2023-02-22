<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class ListFineTunesResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\ListFineTunesResponse $listFineTunesResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->listFineTunesResponse = null;
		$this->statusCode = 0;
	}
}
