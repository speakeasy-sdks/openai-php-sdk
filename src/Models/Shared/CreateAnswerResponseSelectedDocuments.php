<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateAnswerResponseSelectedDocuments
{
    #[\JMS\Serializer\Annotation\SerializedName('document')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $document = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('text')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $text = null;
    
	public function __construct()
	{
		$this->document = null;
		$this->text = null;
	}
}
