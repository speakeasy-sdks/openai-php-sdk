<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class CreateAssistantFileRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Openai\SDK\Models\Shared\CreateAssistantFileRequest $createAssistantFileRequest;
    
    /**
     * The ID of the assistant for which to create a File.
     * 
     * 
     * 
     * @var string $assistantId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=assistant_id')]
    public string $assistantId;
    
	public function __construct()
	{
		$this->createAssistantFileRequest = new \Openai\SDK\Models\Shared\CreateAssistantFileRequest();
		$this->assistantId = "";
	}
}
