<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveModelResponse
{
    public string $contentType;
    
    public mixed $model = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->model = null;
		$this->statusCode = 0;
	}
}
