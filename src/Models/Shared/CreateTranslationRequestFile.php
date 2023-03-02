<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateTranslationRequestFile
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
