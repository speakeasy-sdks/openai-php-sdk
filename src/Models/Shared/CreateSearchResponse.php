<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateSearchResponse
{
    /**
     * @var ?array<\Openai\SDK\Models\Shared\CreateSearchResponseData>
     */
    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateSearchResponseData>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $model = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $object = null;
    
	public function __construct()
	{
		$this->data = null;
		$this->model = null;
		$this->object = null;
	}
}
