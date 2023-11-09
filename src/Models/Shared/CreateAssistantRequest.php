<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateAssistantRequest
{
    /**
     * The description of the assistant. The maximum length is 512 characters.
     * 
     * 
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * A list of [file](/docs/api-reference/files) IDs attached to this assistant. There can be a maximum of 20 files attached to the assistant. Files are ordered by their creation date in ascending order.
     * 
     * 
     * 
     * @var ?array<string> $fileIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('file_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $fileIds = null;
    
    /**
     * The system instructions that the assistant uses. The maximum length is 32768 characters.
     * 
     * 
     * 
     * @var ?string $instructions
     */
	#[\JMS\Serializer\Annotation\SerializedName('instructions')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $instructions = null;
    
    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     * 
     * 
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateAssistantRequestMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateAssistantRequestMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateAssistantRequestMetadata $metadata = null;
    
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     * 
     * 
     * 
     * @var string $model
     */
	#[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    /**
     * The name of the assistant. The maximum length is 256 characters.
     * 
     * 
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * A list of tool enabled on the assistant. There can be a maximum of 128 tools per assistant. Tools can be of types `code_interpreter`, `retrieval`, or `function`.
     * 
     * 
     * 
     * @var ?array<mixed> $tools
     */
	#[\JMS\Serializer\Annotation\SerializedName('tools')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tools = null;
    
	public function __construct()
	{
		$this->description = null;
		$this->fileIds = null;
		$this->instructions = null;
		$this->metadata = null;
		$this->model = "";
		$this->name = null;
		$this->tools = null;
	}
}