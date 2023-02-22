<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateImageRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('n')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $n = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('prompt')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $prompt;
    
    #[\JMS\Serializer\Annotation\SerializedName('response_format')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\CreateImageRequestResponseFormatEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateImageRequestResponseFormatEnum $responseFormat = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('size')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\CreateImageRequestSizeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateImageRequestSizeEnum $size = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->n = null;
		$this->prompt = "";
		$this->responseFormat = null;
		$this->size = null;
		$this->user = null;
	}
}
