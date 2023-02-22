<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateSearchRequest
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documents = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $file = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max_rerank')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxRerank = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('query')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $query;
    
    #[\JMS\Serializer\Annotation\SerializedName('return_metadata')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $returnMetadata = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->documents = null;
		$this->file = null;
		$this->maxRerank = null;
		$this->query = "";
		$this->returnMetadata = null;
		$this->user = null;
	}
}
