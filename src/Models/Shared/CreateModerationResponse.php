<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateModerationResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    /**
     * @var array<\Openai\SDK\Models\Shared\CreateModerationResponseResults>
     */
    #[\JMS\Serializer\Annotation\SerializedName('results')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateModerationResponseResults>')]
    public array $results;
    
	public function __construct()
	{
		$this->id = "";
		$this->model = "";
		$this->results = [];
	}
}
