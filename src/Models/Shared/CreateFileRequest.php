<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateFileRequest
{
    #[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateFileRequestFile $file;
    
    #[SpeakeasyMetadata('multipartForm:name=purpose')]
    public string $purpose;
    
	public function __construct()
	{
		$this->file = new \Openai\SDK\Models\Shared\CreateFileRequestFile();
		$this->purpose = "";
	}
}
