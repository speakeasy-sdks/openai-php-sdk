<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateClassificationRequest
{
    /**
     * @var ?array<array<string>>
     */
    #[\JMS\Serializer\Annotation\SerializedName('examples')]
    #[\JMS\Serializer\Annotation\Type('array<array<string>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $examples = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('expand')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $expand = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $file = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('labels')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $labels = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('logit_bias')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $logitBias = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('logprobs')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $logprobs = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max_examples')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxExamples = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('query')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $query;
    
    #[\JMS\Serializer\Annotation\SerializedName('return_metadata')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $returnMetadata = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('return_prompt')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $returnPrompt = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('search_model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $searchModel = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $temperature = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->examples = null;
		$this->expand = null;
		$this->file = null;
		$this->labels = null;
		$this->logitBias = null;
		$this->logprobs = null;
		$this->maxExamples = null;
		$this->model = null;
		$this->query = "";
		$this->returnMetadata = null;
		$this->returnPrompt = null;
		$this->searchModel = null;
		$this->temperature = null;
		$this->user = null;
	}
}
