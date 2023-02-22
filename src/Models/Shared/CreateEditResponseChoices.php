<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEditResponseChoices
{
    #[\JMS\Serializer\Annotation\SerializedName('finish_reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $finishReason = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $index = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('logprobs')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateEditResponseChoicesLogprobs')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateEditResponseChoicesLogprobs $logprobs = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $text = null;
    
	public function __construct()
	{
		$this->finishReason = null;
		$this->index = null;
		$this->logprobs = null;
		$this->text = null;
	}
}
