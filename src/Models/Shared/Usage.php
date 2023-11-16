<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * Usage - The usage information for the request.
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class Usage
{
    /**
     * The number of tokens used by the prompt.
     * 
     * @var int $promptTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('prompt_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $promptTokens;
    
    /**
     * The total number of tokens used by the request.
     * 
     * @var int $totalTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalTokens;
    
	public function __construct()
	{
		$this->promptTokens = 0;
		$this->totalTokens = 0;
	}
}
