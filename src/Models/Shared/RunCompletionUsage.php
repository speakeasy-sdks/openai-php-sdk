<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * RunCompletionUsage - Usage statistics related to the run. This value will be `null` if the run is not in a terminal state (i.e. `in_progress`, `queued`, etc.).
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class RunCompletionUsage
{
    /**
     * Number of completion tokens used over the course of the run.
     * 
     * @var int $completionTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('completion_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $completionTokens;
    
    /**
     * Number of prompt tokens used over the course of the run.
     * 
     * @var int $promptTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('prompt_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $promptTokens;
    
    /**
     * Total number of tokens used (prompt + completion).
     * 
     * @var int $totalTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('total_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalTokens;
    
	public function __construct()
	{
		$this->completionTokens = 0;
		$this->promptTokens = 0;
		$this->totalTokens = 0;
	}
}