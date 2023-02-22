<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class ListEnginesResponse
{
    /**
     * @var array<mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    public array $data;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->data = [];
		$this->object = "";
	}
}
