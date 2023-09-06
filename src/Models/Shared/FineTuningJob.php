<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * FineTuningJob - The `fine_tuning.job` object represents a fine-tuning job that has been created through the API.
 * 
 * 
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class FineTuningJob
{
    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was created.
     * 
     * @var int $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $createdAt;
    
    /**
     * The name of the fine-tuned model that is being created.
     * 
     * @var string $fineTunedModel
     */
	#[\JMS\Serializer\Annotation\SerializedName('fine_tuned_model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $fineTunedModel;
    
    /**
     * The Unix timestamp (in seconds) for when the fine-tuning job was finished.
     * 
     * @var ?int $finishedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('finished_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $finishedAt = null;
    
    /**
     * The hyperparameters used for the fine-tuning job. See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     * 
     * @var \Openai\SDK\Models\Shared\FineTuningJobHyperparameters $hyperparameters
     */
	#[\JMS\Serializer\Annotation\SerializedName('hyperparameters')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\FineTuningJobHyperparameters')]
    public FineTuningJobHyperparameters $hyperparameters;
    
    /**
     * The object identifier, which can be referenced in the API endpoints.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The base model that is being fine-tuned.
     * 
     * @var string $model
     */
	#[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $model;
    
    /**
     * The object type, which is always "fine_tuning.job".
     * 
     * @var string $object
     */
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
    /**
     * The organization that owns the fine-tuning job.
     * 
     * @var string $organizationId
     */
	#[\JMS\Serializer\Annotation\SerializedName('organization_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $organizationId;
    
    /**
     * The compiled results file ID(s) for the fine-tuning job. You can retrieve the results with the [Files API](/docs/api-reference/files/retrieve-contents).
     * 
     * @var array<\Openai\SDK\Models\Shared\OpenAIFile> $resultFiles
     */
	#[\JMS\Serializer\Annotation\SerializedName('result_files')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\OpenAIFile>')]
    public array $resultFiles;
    
    /**
     * The current status of the fine-tuning job, which can be either `created`, `pending`, `running`, `succeeded`, `failed`, or `cancelled`.
     * 
     * @var string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $status;
    
    /**
     * The total number of billable tokens processed by this fine-tuning job.
     * 
     * @var int $trainedTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('trained_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $trainedTokens;
    
    /**
     * The file ID used for training. You can retrieve the training data with the [Files API](/docs/api-reference/files/retrieve-contents).
     * 
     * @var string $trainingFile
     */
	#[\JMS\Serializer\Annotation\SerializedName('training_file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $trainingFile;
    
    /**
     * The file ID used for validation. You can retrieve the validation results with the [Files API](/docs/api-reference/files/retrieve-contents).
     * 
     * @var string $validationFile
     */
	#[\JMS\Serializer\Annotation\SerializedName('validation_file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $validationFile;
    
	public function __construct()
	{
		$this->createdAt = 0;
		$this->fineTunedModel = "";
		$this->finishedAt = null;
		$this->hyperparameters = new \Openai\SDK\Models\Shared\FineTuningJobHyperparameters();
		$this->id = "";
		$this->model = "";
		$this->object = "";
		$this->organizationId = "";
		$this->resultFiles = [];
		$this->status = "";
		$this->trainedTokens = 0;
		$this->trainingFile = "";
		$this->validationFile = "";
	}
}
