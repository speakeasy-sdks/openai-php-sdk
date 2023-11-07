<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ChatCompletionToolFunction
{
    /**
     * A description of what the function does, used by the model to choose when and how to call the function.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * The name of the function to be called. Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 64.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The parameters the functions accepts, described as a JSON Schema object. See the [guide](/docs/guides/gpt/function-calling) for examples, and the [JSON Schema reference](https://json-schema.org/understanding-json-schema/) for documentation about the format.
     * 
     * 
     * To describe a function that accepts no parameters, provide the value `{"type": "object", "properties": {}}`.
     * 
     * @var array<string, mixed> $parameters
     */
	#[\JMS\Serializer\Annotation\SerializedName('parameters')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    public array $parameters;
    
	public function __construct()
	{
		$this->description = null;
		$this->name = "";
		$this->parameters = [];
	}
}
