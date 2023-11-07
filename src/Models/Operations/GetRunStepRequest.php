<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class GetRunStepRequest
{
    /**
     * The ID of the run to which the run step belongs.
     * 
     * @var string $runId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=run_id')]
    public string $runId;
    
    /**
     * The ID of the run step to retrieve.
     * 
     * @var string $stepId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=step_id')]
    public string $stepId;
    
    /**
     * The ID of the thread to which the run and run step belongs.
     * 
     * @var string $threadId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=thread_id')]
    public string $threadId;
    
	public function __construct()
	{
		$this->runId = "";
		$this->stepId = "";
		$this->threadId = "";
	}
}
