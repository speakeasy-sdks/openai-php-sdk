<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class DeleteThreadRequest
{
    /**
     * The ID of the thread to delete.
     * 
     * @var string $threadId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=thread_id')]
    public string $threadId;
    
	public function __construct()
	{
		$this->threadId = "";
	}
}
