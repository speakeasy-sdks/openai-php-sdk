<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class ChatCompletionRequestMessage
{
    #[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $content;
    
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\ChatCompletionRequestMessageRoleEnum>')]
    public ChatCompletionRequestMessageRoleEnum $role;
    
	public function __construct()
	{
		$this->content = "";
		$this->name = null;
		$this->role = \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRoleEnum::SYSTEM;
	}
}
