<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateChatCompletionResponseChoices
{
    #[\JMS\Serializer\Annotation\SerializedName('finish_reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $finishReason = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $index = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\ChatCompletionResponseMessage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ChatCompletionResponseMessage $message = null;
    
	public function __construct()
	{
		$this->finishReason = null;
		$this->index = null;
		$this->message = null;
	}
}
