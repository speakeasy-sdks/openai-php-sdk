<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateSearchResponseData
{
    #[\JMS\Serializer\Annotation\SerializedName('document')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $document = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $object = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('score')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $score = null;
    
	public function __construct()
	{
		$this->document = null;
		$this->object = null;
		$this->score = null;
	}
}
