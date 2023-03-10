<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class CreateImageEditRequestImage
{
    #[SpeakeasyMetadata('multipartForm:content=true')]
    public string $content;
    
    #[SpeakeasyMetadata('multipartForm:name=image')]
    public string $image;
    
	public function __construct()
	{
		$this->content = "";
		$this->image = "";
	}
}
