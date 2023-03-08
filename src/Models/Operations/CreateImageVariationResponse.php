<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class CreateImageVariationResponse
{
    public string $contentType;
    
    public mixed $imagesResponse = null;
    
    public int $statusCode;
    
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->imagesResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
