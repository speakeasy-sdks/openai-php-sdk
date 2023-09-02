<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * ListFineTuningJobEventsResponse - OK
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class ListFineTuningJobEventsResponse
{
    /**
     * $data
     * 
     * @var array<\Openai\SDK\Models\Shared\FineTuningJobEvent> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\FineTuningJobEvent>')]
    public array $data;
    
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->data = [];
		$this->object = "";
	}
}