<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class RetrieveFineTuneResponse
{
    public string $contentType;
    
    public mixed $fineTune = null;
    
    public int $statusCode;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->fineTune = null;
		$this->statusCode = 0;
	}
}
