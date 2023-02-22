<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateAnswerResponse
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('answers')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $answers = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('completion')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $completion = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $model = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $object = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('search_model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $searchModel = null;
    
    /**
     * @var ?array<\Openai\SDK\Models\Shared\CreateAnswerResponseSelectedDocuments>
     */
    #[\JMS\Serializer\Annotation\SerializedName('selected_documents')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateAnswerResponseSelectedDocuments>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $selectedDocuments = null;
    
	public function __construct()
	{
		$this->answers = null;
		$this->completion = null;
		$this->model = null;
		$this->object = null;
		$this->searchModel = null;
		$this->selectedDocuments = null;
	}
}
