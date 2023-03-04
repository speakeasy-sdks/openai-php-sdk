<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class DownloadFileResponse
{
    public string $contentType;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    public ?string $downloadFile200ApplicationJSONString = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->downloadFile200ApplicationJSONString = null;
	}
}
