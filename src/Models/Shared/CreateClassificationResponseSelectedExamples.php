<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateClassificationResponseSelectedExamples
{
    #[\JMS\Serializer\Annotation\SerializedName('document')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $document = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $label = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $text = null;
    
	public function __construct()
	{
		$this->document = null;
		$this->label = null;
		$this->text = null;
	}
}
