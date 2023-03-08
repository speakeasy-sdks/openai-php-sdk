<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateChatCompletionRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('frequency_penalty')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $frequencyPenalty = null;
    
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('logit_bias')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $logitBias = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('max_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxTokens = null;
    
    /**
     * @var array<\Openai\SDK\Models\Shared\ChatCompletionRequestMessage>
     */
    #[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\ChatCompletionRequestMessage>')]
    public array $messages;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('n')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $n = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('presence_penalty')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $presencePenalty = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('stop')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $stop = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('stream')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $stream = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $temperature = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('top_p')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $topP = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->frequencyPenalty = null;
		$this->logitBias = null;
		$this->maxTokens = null;
		$this->messages = [];
		$this->model = "";
		$this->n = null;
		$this->presencePenalty = null;
		$this->stop = null;
		$this->stream = null;
		$this->temperature = null;
		$this->topP = null;
		$this->user = null;
	}
}
