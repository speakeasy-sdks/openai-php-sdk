<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class ListMessagesResponse
{
    /**
     * $data
     * 
     * @var array<\Openai\SDK\Models\Shared\MessageObject> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\MessageObject>')]
    public array $data;
    
	#[\JMS\Serializer\Annotation\SerializedName('first_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $firstId;
    
	#[\JMS\Serializer\Annotation\SerializedName('has_more')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $hasMore;
    
	#[\JMS\Serializer\Annotation\SerializedName('last_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $lastId;
    
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->data = [];
		$this->firstId = "";
		$this->hasMore = false;
		$this->lastId = "";
		$this->object = "";
	}
}
