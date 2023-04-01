<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class FineTuneEvent
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('level')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $level;
    
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->createdAt = 0;
		$this->level = "";
		$this->message = "";
		$this->object = "";
	}
}
