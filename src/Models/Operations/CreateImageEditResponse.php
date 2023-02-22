<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateImageEditResponse
{
    public string $contentType;
    
    public mixed $imagesResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->imagesResponse = null;
		$this->statusCode = 0;
	}
}
