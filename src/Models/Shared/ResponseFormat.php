<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * ResponseFormat - An object specifying the format that the model must output. 
 * 
 * 
 * Setting to `{ "type": "json_object" }` enables JSON mode, which guarantees the message the model generates is valid JSON.
 * 
 * **Important:** when using JSON mode, you **must** also instruct the model to produce JSON yourself via a system or user message. Without this, the model may generate an unending stream of whitespace until the generation reaches the token limit, resulting in a long-running and seemingly "stuck" request. Also note that the message content may be partially cut off if `finish_reason="length"`, which indicates the generation exceeded `max_tokens` or the conversation exceeded the max context length.
 * 
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class ResponseFormat
{
    /**
     * Must be one of `text` or `json_object`.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateChatCompletionRequestType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\CreateChatCompletionRequestType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateChatCompletionRequestType $type = null;
    
	public function __construct()
	{
		$this->type = null;
	}
}
