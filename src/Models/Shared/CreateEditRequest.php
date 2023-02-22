<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEditRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('input')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $input = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('instruction')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $instruction;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('n')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $n = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $temperature = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('top_p')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $topP = null;
    
	public function __construct()
	{
		$this->input = null;
		$this->instruction = "";
		$this->model = null;
		$this->n = null;
		$this->temperature = null;
		$this->topP = null;
	}
}
