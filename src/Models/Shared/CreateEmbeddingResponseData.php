<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEmbeddingResponseData
{
    /**
     * @var array<float>
     */
    #[\JMS\Serializer\Annotation\SerializedName('embedding')]
    #[\JMS\Serializer\Annotation\Type('array<float>')]
    public array $embedding;
    
    #[\JMS\Serializer\Annotation\SerializedName('index')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $index;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->embedding = [];
		$this->index = 0;
		$this->object = "";
	}
}
