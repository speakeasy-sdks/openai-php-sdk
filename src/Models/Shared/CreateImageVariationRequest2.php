<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class CreateImageVariationRequest2
{
    /**
     * The image to use as the basis for the variation(s). Must be a valid PNG file, less than 4MB, and square.
     * 
     * @var \Openai\SDK\Models\Shared\CreateImageVariationRequestImage $image
     */
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateImageVariationRequestImage $image;
    
    /**
     * The number of images to generate. Must be between 1 and 10.
     * 
     * @var ?int $n
     */
	#[SpeakeasyMetadata('multipartForm:name=n')]
    public ?int $n = null;
    
    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateImageVariationRequestResponseFormat $responseFormat
     */
	#[SpeakeasyMetadata('multipartForm:name=response_format')]
    public ?CreateImageVariationRequestResponseFormat $responseFormat = null;
    
    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateImageVariationRequestSize $size
     */
	#[SpeakeasyMetadata('multipartForm:name=size')]
    public ?CreateImageVariationRequestSize $size = null;
    
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     * 
     * 
     * 
     * @var ?string $user
     */
	#[SpeakeasyMetadata('multipartForm:name=user')]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->image = new \Openai\SDK\Models\Shared\CreateImageVariationRequestImage();
		$this->n = null;
		$this->responseFormat = null;
		$this->size = null;
		$this->user = null;
	}
}
