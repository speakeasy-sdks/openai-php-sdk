<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEditResponseChoicesLogprobs
{
    /**
     * @var ?array<int>
     */
    #[\JMS\Serializer\Annotation\SerializedName('text_offset')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $textOffset = null;
    
    /**
     * @var ?array<float>
     */
    #[\JMS\Serializer\Annotation\SerializedName('token_logprobs')]
    #[\JMS\Serializer\Annotation\Type('array<float>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tokenLogprobs = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('tokens')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tokens = null;
    
    /**
     * @var ?array<array<string, mixed>>
     */
    #[\JMS\Serializer\Annotation\SerializedName('top_logprobs')]
    #[\JMS\Serializer\Annotation\Type('array<array<string, mixed>>')]
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
