<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK;

/**
 * Gpt - APIs for sampling from and fine-tuning language models
 * 
 * @package Openai\SDK
 * @access public
 */
class Gpt
{
	public const SERVERS = [
		'https://api.openai.com/v1',
	];
  	
    /**
     * The OpenAI REST API
     * 
     * @var OpenAI $$openAI
     */
	public OpenAI $openAI;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return GptBuilder
	 */
	public static function builder(): GptBuilder
	{
		return new GptBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->openAI = new OpenAI($this->sdkConfiguration);
	}
}