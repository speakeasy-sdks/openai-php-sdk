<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class ListFineTuneEventsResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\ListFineTuneEventsResponse $listFineTuneEventsResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->listFineTuneEventsResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
