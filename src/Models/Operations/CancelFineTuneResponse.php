<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;


class CancelFineTuneResponse
{
	
    public string $contentType;
    
    /**
     * OK
     * 
     * @var ?\Openai\SDK\Models\Shared\FineTune $fineTune
     */
	
    public ?\Openai\SDK\Models\Shared\FineTune $fineTune = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->fineTune = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
