<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class CreateTranscriptionRequestFile
{
	#[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
	#[SpeakeasyMetadata('multipartForm:name=file')]
    public string $fileName;
    
	public function __construct()
	{
		$this->content = "";
		$this->fileName = "";
	}
}
