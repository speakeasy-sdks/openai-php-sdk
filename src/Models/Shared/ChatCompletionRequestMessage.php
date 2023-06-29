<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ChatCompletionRequestMessage
{
    /**
     * The contents of the message. `content` is required for all messages, and may be null for assistant messages with function calls.
     * 
     * @var string $content
     */
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $content;
    
    /**
     * The name and arguments of a function that should be called, as generated by the model.
     * 
     * @var ?\Openai\SDK\Models\Shared\ChatCompletionRequestMessageFunctionCall $functionCall
     */
	#[\JMS\Serializer\Annotation\SerializedName('function_call')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\ChatCompletionRequestMessageFunctionCall')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ChatCompletionRequestMessageFunctionCall $functionCall = null;
    
    /**
     * The name of the author of this message. `name` is required if role is `function`, and it should be the name of the function whose response is in the `content`. May contain a-z, A-Z, 0-9, and underscores, with a maximum length of 64 characters.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * The role of the messages author. One of `system`, `user`, `assistant`, or `function`.
     * 
     * @var \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole $role
     */
	#[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole>')]
    public ChatCompletionRequestMessageRole $role;
    
	public function __construct()
	{
		$this->content = "";
		$this->functionCall = null;
		$this->name = null;
		$this->role = \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole::System;
	}
}
