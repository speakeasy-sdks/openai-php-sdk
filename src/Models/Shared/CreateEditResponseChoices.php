<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateEditResponseChoices
{
	#[\JMS\Serializer\Annotation\SerializedName('finish_reason')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\CreateEditResponseChoicesFinishReason>')]
    public CreateEditResponseChoicesFinishReason $finishReason;
    
	#[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $index;
    
	#[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $text;
    
	public function __construct()
	{
		$this->finishReason = \Openai\SDK\Models\Shared\CreateEditResponseChoicesFinishReason::Stop;
		$this->index = 0;
		$this->text = "";
	}
}
