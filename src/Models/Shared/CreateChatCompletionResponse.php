<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateChatCompletionResponse
{
    /**
     * @var array<\Openai\SDK\Models\Shared\CreateChatCompletionResponseChoices>
     */
    #[\JMS\Serializer\Annotation\SerializedName('choices')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateChatCompletionResponseChoices>')]
    public array $choices;
    
    #[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $created;
    
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
    #[\JMS\Serializer\Annotation\SerializedName('usage')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateChatCompletionResponseUsage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateChatCompletionResponseUsage $usage = null;
    
	public function __construct()
	{
		$this->choices = [];
		$this->created = 0;
		$this->id = "";
		$this->model = "";
		$this->object = "";
		$this->usage = null;
	}
}
