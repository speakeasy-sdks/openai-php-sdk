<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEditResponseUsage
{
    #[\JMS\Serializer\Annotation\SerializedName('completion_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $completionTokens;
    
    #[\JMS\Serializer\Annotation\SerializedName('prompt_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $promptTokens;
    
    #[\JMS\Serializer\Annotation\SerializedName('total_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalTokens;
    
	public function __construct()
	{
		$this->completionTokens = 0;
		$this->promptTokens = 0;
		$this->totalTokens = 0;
	}
}
