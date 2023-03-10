<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEditResponse
{
    /**
     * @var array<\Openai\SDK\Models\Shared\CreateEditResponseChoices>
     */
    #[\JMS\Serializer\Annotation\SerializedName('choices')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateEditResponseChoices>')]
    public array $choices;
    
    #[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $created;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
    #[\JMS\Serializer\Annotation\SerializedName('usage')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateEditResponseUsage')]
    public CreateEditResponseUsage $usage;
    
	public function __construct()
	{
		$this->choices = [];
		$this->created = 0;
		$this->object = "";
		$this->usage = new \Openai\SDK\Models\Shared\CreateEditResponseUsage();
	}
}
