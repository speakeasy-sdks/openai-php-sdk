<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class RetrieveFileRequest
{
    /**
     * The ID of the file to use for this request.
     * 
     * @var string $fileId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=file_id')]
    public string $fileId;
    
	public function __construct()
	{
		$this->fileId = "";
	}
}
