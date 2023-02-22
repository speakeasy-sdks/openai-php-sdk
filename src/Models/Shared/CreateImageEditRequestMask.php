<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateImageEditRequestMask
{
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
    #[SpeakeasyMetadata('multipartForm:name=mask')]
    public string $mask;
    
	public function __construct()
	{
		$this->content = "";
		$this->mask = "";
	}
}
