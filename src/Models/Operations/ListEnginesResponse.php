<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class ListEnginesResponse
{
    public string $contentType;
    
    public ?\Openai\SDK\Models\Shared\ListEnginesResponse $listEnginesResponse = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->listEnginesResponse = null;
		$this->statusCode = 0;
	}
}
