<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateFineTuningJobRequest
{
    /**
     * The hyperparameters used for the fine-tuning job.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateFineTuningJobRequestHyperparameters $hyperparameters
     */
	#[\JMS\Serializer\Annotation\SerializedName('hyperparameters')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateFineTuningJobRequestHyperparameters')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateFineTuningJobRequestHyperparameters $hyperparameters = null;
    
    /**
     * The name of the model to fine-tune. You can select one of the
     * 
     * [supported models](/docs/guides/fine-tuning/what-models-can-be-fine-tuned).
     * 
     * 
     * @var mixed $model
     */
	#[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $model;
    
    /**
     * A string of up to 40 characters that will be added to your fine-tuned model name.
     * 
     * 
     * For example, a `suffix` of "custom-model-name" would produce a model name like `ft:gpt-3.5-turbo:openai:custom-model-name:7p4lURel`.
     * 
     * 
     * @var ?string $suffix
     */
	#[\JMS\Serializer\Annotation\SerializedName('suffix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $suffix = null;
    
    /**
     * The ID of an uploaded file that contains training data.
     * 
     * 
     * See [upload file](/docs/api-reference/files/upload) for how to upload a file.
     * 
     * Your dataset must be formatted as a JSONL file. Additionally, you must upload your file with the purpose `fine-tune`.
     * 
     * See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     * 
     * 
     * @var string $trainingFile
     */
	#[\JMS\Serializer\Annotation\SerializedName('training_file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $trainingFile;
    
    /**
     * The ID of an uploaded file that contains validation data.
     * 
     * 
     * If you provide this file, the data is used to generate validation
     * metrics periodically during fine-tuning. These metrics can be viewed in
     * the fine-tuning results file.
     * The same data should not be present in both train and validation files.
     * 
     * Your dataset must be formatted as a JSONL file. You must upload your file with the purpose `fine-tune`.
     * 
     * See the [fine-tuning guide](/docs/guides/fine-tuning) for more details.
     * 
     * 
     * @var ?string $validationFile
     */
	#[\JMS\Serializer\Annotation\SerializedName('validation_file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $validationFile = null;
    
	public function __construct()
	{
		$this->hyperparameters = null;
		$this->model = null;
		$this->suffix = null;
		$this->trainingFile = "";
		$this->validationFile = null;
	}
}