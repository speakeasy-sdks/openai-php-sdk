<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class GetRunRequest
{
    /**
     * The ID of the run to retrieve.
     * 
     * @var string $runId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=run_id')]
    public string $runId;
    
    /**
     * The ID of the [thread](/docs/api-reference/threads) that was run.
     * 
     * @var string $threadId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=thread_id')]
    public string $threadId;
    
	public function __construct()
	{
		$this->runId = "";
		$this->threadId = "";
	}
}
