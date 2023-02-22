<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;

use \Openai\SDK\Utils\SpeakeasyMetadata;

class RetrieveModelPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=model')]
    public string $model;
    
	public function __construct()
	{
		$this->model = "";
	}
}
