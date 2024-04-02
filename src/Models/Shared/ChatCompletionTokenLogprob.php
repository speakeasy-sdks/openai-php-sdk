<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ChatCompletionTokenLogprob
{
    /**
     * A list of integers representing the UTF-8 bytes representation of the token. Useful in instances where characters are represented by multiple tokens and their byte representations must be combined to generate the correct text representation. Can be `null` if there is no bytes representation for the token.
     * 
     * @var array<int> $bytes
     */
	#[\JMS\Serializer\Annotation\SerializedName('bytes')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    public array $bytes;
    
    /**
     * The log probability of this token, if it is within the top 20 most likely tokens. Otherwise, the value `-9999.0` is used to signify that the token is very unlikely.
     * 
     * @var float $logprob
     */
	#[\JMS\Serializer\Annotation\SerializedName('logprob')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $logprob;
    
    /**
     * The token.
     * 
     * @var string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $token;
    
    /**
     * List of the most likely tokens and their log probability, at this token position. In rare cases, there may be fewer than the number of requested `top_logprobs` returned.
     * 
     * @var array<\Openai\SDK\Models\Shared\TopLogprobs> $topLogprobs
     */
	#[\JMS\Serializer\Annotation\SerializedName('top_logprobs')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\TopLogprobs>')]
    public array $topLogprobs;
    
	public function __construct()
	{
		$this->bytes = [];
		$this->logprob = 0;
		$this->token = "";
		$this->topLogprobs = [];
	}
}
