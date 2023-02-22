<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateFineTuneRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('batch_size')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $batchSize = null;
    
    /**
     * @var ?array<float>
     */
    #[\JMS\Serializer\Annotation\SerializedName('classification_betas')]
    #[\JMS\Serializer\Annotation\Type('array<float>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $classificationBetas = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('classification_n_classes')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $classificationNClasses = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('classification_positive_class')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $classificationPositiveClass = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('compute_classification_metrics')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $computeClassificationMetrics = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('learning_rate_multiplier')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $learningRateMultiplier = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $model = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('n_epochs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $nEpochs = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('prompt_loss_weight')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $promptLossWeight = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('suffix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $suffix = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('training_file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $trainingFile;
    
    #[\JMS\Serializer\Annotation\SerializedName('validation_file')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $validationFile = null;
    
	public function __construct()
	{
		$this->batchSize = null;
		$this->classificationBetas = null;
		$this->classificationNClasses = null;
		$this->classificationPositiveClass = null;
		$this->computeClassificationMetrics = null;
		$this->learningRateMultiplier = null;
		$this->model = null;
		$this->nEpochs = null;
		$this->promptLossWeight = null;
		$this->suffix = null;
		$this->trainingFile = "";
		$this->validationFile = null;
	}
}
