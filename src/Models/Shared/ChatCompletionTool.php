<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ChatCompletionTool
{
	#[\JMS\Serializer\Annotation\SerializedName('function')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\FunctionObject')]
    public FunctionObject $function;
    
    /**
     * The type of the tool. Currently, only `function` is supported.
     * 
     * @var \Openai\SDK\Models\Shared\ChatCompletionToolType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\ChatCompletionToolType>')]
    public ChatCompletionToolType $type;
    
	public function __construct()
	{
		$this->function = new \Openai\SDK\Models\Shared\FunctionObject();
		$this->type = \Openai\SDK\Models\Shared\ChatCompletionToolType::Function;
	}
}