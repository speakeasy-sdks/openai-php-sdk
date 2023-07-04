<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateEditResponseChoicesLogprobs
{
    /**
     * $textOffset
     * 
     * @var ?array<int> $textOffset
     */
	#[\JMS\Serializer\Annotation\SerializedName('text_offset')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $textOffset = null;
    
    /**
     * $tokenLogprobs
     * 
     * @var ?array<float> $tokenLogprobs
     */
	#[\JMS\Serializer\Annotation\SerializedName('token_logprobs')]
    #[\JMS\Serializer\Annotation\Type('array<float>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tokenLogprobs = null;
    
    /**
     * $tokens
     * 
     * @var ?array<string> $tokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('tokens')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tokens = null;
    
    /**
     * $topLogprobs
     * 
     * @var ?array<array<string, int>> $topLogprobs
     */
	#[\JMS\Serializer\Annotation\SerializedName('top_logprobs')]
    #[\JMS\Serializer\Annotation\Type('array<array<string, int>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $topLogprobs = null;
    
	public function __construct()
	{
		$this->textOffset = null;
		$this->tokenLogprobs = null;
		$this->tokens = null;
		$this->topLogprobs = null;
	}
}
