<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * Image - Represents the url or the content of an image generated by the OpenAI API.
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class Image
{
    /**
     * The base64-encoded JSON of the generated image, if `response_format` is `b64_json`.
     * 
     * @var ?string $b64Json
     */
	#[\JMS\Serializer\Annotation\SerializedName('b64_json')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $b64Json = null;
    
    /**
     * The URL of the generated image, if `response_format` is `url` (default).
     * 
     * @var ?string $url
     */
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;
    
	public function __construct()
	{
		$this->b64Json = null;
		$this->url = null;
	}
}