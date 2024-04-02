<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class Results
{
    /**
     * A list of the categories, and whether they are flagged or not.
     * 
     * @var \Openai\SDK\Models\Shared\Categories $categories
     */
	#[\JMS\Serializer\Annotation\SerializedName('categories')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\Categories')]
    public Categories $categories;
    
    /**
     * A list of the categories along with their scores as predicted by model.
     * 
     * @var \Openai\SDK\Models\Shared\CategoryScores $categoryScores
     */
	#[\JMS\Serializer\Annotation\SerializedName('category_scores')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\CategoryScores')]
    public CategoryScores $categoryScores;
    
    /**
     * Whether any of the below categories are flagged.
     * 
     * @var bool $flagged
     */
	#[\JMS\Serializer\Annotation\SerializedName('flagged')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $flagged;
    
	public function __construct()
	{
		$this->categories = new \Openai\SDK\Models\Shared\Categories();
		$this->categoryScores = new \Openai\SDK\Models\Shared\CategoryScores();
		$this->flagged = false;
	}
}
