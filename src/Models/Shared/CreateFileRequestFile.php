<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateFileRequestFile
{
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
    #[SpeakeasyMetadata('multipartForm:name=file')]
    public string $file;
    
	public function __construct()
	{
		$this->content = "";
		$this->file = "";
	}
}
