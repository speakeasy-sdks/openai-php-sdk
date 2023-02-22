<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;



class DeleteFileResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('deleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $deleted;
    
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    #[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $object;
    
	public function __construct()
	{
		$this->deleted = false;
		$this->id = "";
		$this->object = "";
	}
}
