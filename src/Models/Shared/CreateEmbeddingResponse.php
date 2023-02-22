<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateEmbeddingResponse
{
    /**
     * @var array<\Openai\SDK\Models\Shared\CreateEmbeddingResponseData>
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateEmbeddingResponseData>')]
    public array $data;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
    #[\JMS\Serializer\Annotation\SerializedName('usage')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateEmbeddingResponseUsage')]
    public CreateEmbeddingResponseUsage $usage;
    
	public function __construct()
	{
		$this->data = [];
		$this->model = "";
		$this->object = "";
		$this->usage = new \Openai\SDK\Models\Shared\CreateEmbeddingResponseUsage();
	}
}
