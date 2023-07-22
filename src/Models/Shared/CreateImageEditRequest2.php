<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class CreateImageEditRequest2
{
    /**
     * The image to edit. Must be a valid PNG file, less than 4MB, and square. If mask is not provided, image must have transparency, which will be used as the mask.
     * 
     * @var \Openai\SDK\Models\Shared\CreateImageEditRequestImage $image
     */
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateImageEditRequestImage $image;
    
    /**
     * An additional image whose fully transparent areas (e.g. where alpha is zero) indicate where `image` should be edited. Must be a valid PNG file, less than 4MB, and have the same dimensions as `image`.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateImageEditRequestMask $mask
     */
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public ?CreateImageEditRequestMask $mask = null;
    
    /**
     * The number of images to generate. Must be between 1 and 10.
     * 
     * @var ?int $n
     */
	#[SpeakeasyMetadata('multipartForm:name=n')]
    public ?int $n = null;
    
    /**
     * A text description of the desired image(s). The maximum length is 1000 characters.
     * 
     * @var string $prompt
     */
	#[SpeakeasyMetadata('multipartForm:name=prompt')]
    public string $prompt;
    
    /**
     * The format in which the generated images are returned. Must be one of `url` or `b64_json`.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateImageEditRequestResponseFormat $responseFormat
     */
	#[SpeakeasyMetadata('multipartForm:name=response_format')]
    public ?CreateImageEditRequestResponseFormat $responseFormat = null;
    
    /**
     * The size of the generated images. Must be one of `256x256`, `512x512`, or `1024x1024`.
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateImageEditRequestSize $size
     */
	#[SpeakeasyMetadata('multipartForm:name=size')]
    public ?CreateImageEditRequestSize $size = null;
    
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
		$this->image = new \Openai\SDK\Models\Shared\CreateImageEditRequestImage();
		$this->mask = null;
		$this->n = null;
		$this->prompt = "";
		$this->responseFormat = null;
		$this->size = null;
		$this->user = null;
	}
}