<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class ChatCompletionResponseMessage
{
    #[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $content;
    
    #[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\ChatCompletionResponseMessageRoleEnum>')]
    public ChatCompletionResponseMessageRoleEnum $role;
    
	public function __construct()
	{
		$this->content = "";
		$this->role = \Openai\SDK\Models\Shared\ChatCompletionResponseMessageRoleEnum::SYSTEM;
	}
}
