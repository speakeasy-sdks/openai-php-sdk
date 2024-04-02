<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class GetMessageRequest
{
    /**
     * The ID of the message to retrieve.
     * 
     * @var string $messageId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=message_id')]
    public string $messageId;
    
    /**
     * The ID of the [thread](/docs/api-reference/threads) to which this message belongs.
     * 
     * @var string $threadId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=thread_id')]
    public string $threadId;
    
	public function __construct()
	{
		$this->messageId = "";
		$this->threadId = "";
	}
}
