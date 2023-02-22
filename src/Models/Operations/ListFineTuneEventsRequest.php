<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;



class ListFineTuneEventsRequest
{
    public ListFineTuneEventsPathParams $pathParams;
    
    public ListFineTuneEventsQueryParams $queryParams;
    
	public function __construct()
	{
		$this->pathParams = new \Openai\SDK\Models\Operations\ListFineTuneEventsPathParams();
		$this->queryParams = new \Openai\SDK\Models\Operations\ListFineTuneEventsQueryParams();
	}
}
