<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateModerationResponseResults
{
    #[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateModerationResponseResultsCategories')]
    public CreateModerationResponseResultsCategories $categories;
    
    #[\JMS\Serializer\Annotation\SerializedName('category_scores')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CreateModerationResponseResultsCategoryScores')]
    public CreateModerationResponseResultsCategoryScores $categoryScores;
    
    #[\JMS\Serializer\Annotation\SerializedName('flagged')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $flagged;
    
	public function __construct()
	{
		$this->categories = new \Openai\SDK\Models\Shared\CreateModerationResponseResultsCategories();
		$this->categoryScores = new \Openai\SDK\Models\Shared\CreateModerationResponseResultsCategoryScores();
		$this->flagged = false;
	}
}
