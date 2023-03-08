<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateTranscriptionResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $text;
    
	public function __construct()
	{
		$this->text = "";
	}
}
