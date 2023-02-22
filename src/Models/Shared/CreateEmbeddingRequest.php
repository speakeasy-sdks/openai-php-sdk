<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEmbeddingRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('input')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $input;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $user = null;
    
	public function __construct()
	{
		$this->input = null;
		$this->model = null;
		$this->user = null;
	}
}
