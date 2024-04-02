<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * Model - Describes an OpenAI model offering that can be used with the API.
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class Model
{
    /**
     * The Unix timestamp (in seconds) when the model was created.
     * 
     * @var int $created
     */
	#[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $created;
    
    /**
     * The model identifier, which can be referenced in the API endpoints.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The object type, which is always "model".
     * 
     * @var \Openai\SDK\Models\Shared\ModelObject $object
     */
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\ModelObject>')]
    public ModelObject $object;
    
    /**
     * The organization that owns the model.
     * 
     * @var string $ownedBy
     */
	#[\JMS\Serializer\Annotation\SerializedName('owned_by')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $ownedBy;
    
	public function __construct()
	{
		$this->created = 0;
		$this->id = "";
		$this->object = \Openai\SDK\Models\Shared\ModelObject::Model;
		$this->ownedBy = "";
	}
}
