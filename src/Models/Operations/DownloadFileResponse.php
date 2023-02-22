<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class DownloadFileResponse
{
    public string $contentType;
    
    public int $statusCode;
    
    public ?string $downloadFile200ApplicationJSONString = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->downloadFile200ApplicationJSONString = null;
	}
}
