<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * CreateClassificationResponse - OK
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class CreateClassificationResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('completion')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $completion = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('label')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $label = null;
    
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
     * $selectedExamples
     * 
     * @var ?array<\Openai\SDK\Models\Shared\CreateClassificationResponseSelectedExamples> $selectedExamples
     */
	#[\JMS\Serializer\Annotation\SerializedName('selected_examples')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\CreateClassificationResponseSelectedExamples>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $selectedExamples = null;
    
	public function __construct()
	{
		$this->completion = null;
		$this->label = null;
		$this->model = null;
		$this->object = null;
		$this->searchModel = null;
		$this->selectedExamples = null;
	}
}
