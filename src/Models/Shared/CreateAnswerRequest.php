<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateAnswerRequest
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('documents')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $documents = null;
    
    /**
     * @var array<array<string>>
     */
    #[\JMS\Serializer\Annotation\SerializedName('examples')]
    #[\JMS\Serializer\Annotation\Type('array<array<string>>')]
    public array $examples;
    
    #[\JMS\Serializer\Annotation\SerializedName('examples_context')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $examplesContext;
    
    /**
     * @var ?array<mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('expand')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $expand = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $file = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('logit_bias')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $logitBias = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('logprobs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $logprobs = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max_rerank')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxRerank = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxTokens = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('n')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $n = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('question')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $question;
    
    #[\JMS\Serializer\Annotation\SerializedName('return_metadata')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $returnMetadata = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('return_prompt')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $returnPrompt = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('search_model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $searchModel = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('stop')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $stop = null;
    
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
		$this->documents = null;
		$this->examples = [];
		$this->examplesContext = "";
		$this->expand = null;
		$this->file = null;
		$this->logitBias = null;
		$this->logprobs = null;
		$this->maxRerank = null;
		$this->maxTokens = null;
		$this->model = "";
		$this->n = null;
		$this->question = "";
		$this->returnMetadata = null;
		$this->returnPrompt = null;
		$this->searchModel = null;
		$this->stop = null;
		$this->temperature = null;
		$this->user = null;
	}
}
