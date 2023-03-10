<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateModerationResponseResultsCategoryScores
{
    #[\JMS\Serializer\Annotation\SerializedName('hate')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $hate;
    
    #[\JMS\Serializer\Annotation\SerializedName('hate/threatening')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $hateThreatening;
    
    #[\JMS\Serializer\Annotation\SerializedName('self-harm')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $selfHarm;
    
    #[\JMS\Serializer\Annotation\SerializedName('sexual')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $sexual;
    
    #[\JMS\Serializer\Annotation\SerializedName('sexual/minors')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $sexualMinors;
    
    #[\JMS\Serializer\Annotation\SerializedName('violence')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $violence;
    
    #[\JMS\Serializer\Annotation\SerializedName('violence/graphic')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $violenceGraphic;
    
	public function __construct()
	{
		$this->hate = 0;
		$this->hateThreatening = 0;
		$this->selfHarm = 0;
		$this->sexual = 0;
		$this->sexualMinors = 0;
		$this->violence = 0;
		$this->violenceGraphic = 0;
	}
}
