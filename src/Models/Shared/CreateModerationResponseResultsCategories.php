<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class CreateModerationResponseResultsCategories
{
    #[\JMS\Serializer\Annotation\SerializedName('hate')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $hate;
    
    #[\JMS\Serializer\Annotation\SerializedName('hate/threatening')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $hateThreatening;
    
    #[\JMS\Serializer\Annotation\SerializedName('self-harm')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $selfHarm;
    
    #[\JMS\Serializer\Annotation\SerializedName('sexual')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $sexual;
    
    #[\JMS\Serializer\Annotation\SerializedName('sexual/minors')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $sexualMinors;
    
    #[\JMS\Serializer\Annotation\SerializedName('violence')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $violence;
    
    #[\JMS\Serializer\Annotation\SerializedName('violence/graphic')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $violenceGraphic;
    
	public function __construct()
	{
		$this->hate = false;
		$this->hateThreatening = false;
		$this->selfHarm = false;
		$this->sexual = false;
		$this->sexualMinors = false;
		$this->violence = false;
		$this->violenceGraphic = false;
	}
}
