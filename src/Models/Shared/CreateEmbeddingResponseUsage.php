<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEmbeddingResponseUsage
{
    #[\JMS\Serializer\Annotation\SerializedName('prompt_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $promptTokens;
    
    #[\JMS\Serializer\Annotation\SerializedName('total_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $totalTokens;
    
	public function __construct()
	{
		$this->promptTokens = 0;
		$this->totalTokens = 0;
	}
}
