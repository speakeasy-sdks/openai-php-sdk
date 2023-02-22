<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateModerationRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('input')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $input;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $model = null;
    
	public function __construct()
	{
		$this->input = null;
		$this->model = null;
	}
}
