<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ListPaginatedFineTuningJobsResponse
{
    /**
     * $data
     * 
     * @var array<\Openai\SDK\Models\Shared\FineTuningJob> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\FineTuningJob>')]
    public array $data;
    
	#[\JMS\Serializer\Annotation\SerializedName('has_more')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $hasMore;
    
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->data = [];
		$this->hasMore = false;
		$this->object = "";
	}
}
