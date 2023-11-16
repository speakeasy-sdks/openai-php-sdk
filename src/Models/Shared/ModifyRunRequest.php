<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ModifyRunRequest
{
    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     * 
     * 
     * 
     * @var ?\Openai\SDK\Models\Shared\ModifyRunRequestMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\ModifyRunRequestMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ModifyRunRequestMetadata $metadata = null;
    
	public function __construct()
	{
		$this->metadata = null;
	}
}
