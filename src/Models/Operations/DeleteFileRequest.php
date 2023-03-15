<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class DeleteFileRequest
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=file_id')]
    public string $fileId;
    
	public function __construct()
	{
		$this->fileId = "";
	}
}
