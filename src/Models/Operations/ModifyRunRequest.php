<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class ModifyRunRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \Openai\SDK\Models\Shared\ModifyRunRequest $modifyRunRequest;
    
    /**
     * The ID of the run to modify.
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
		$this->modifyRunRequest = new \Openai\SDK\Models\Shared\ModifyRunRequest();
		$this->runId = "";
		$this->threadId = "";
	}
}