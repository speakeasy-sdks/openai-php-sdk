<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '2.0.0';
	public string $sdkVersion = '3.1.0';
	public string $genVersion = '2.213.3';
	public string $userAgent = 'speakeasy-sdk/php 3.1.0 2.213.3 2.0.0 speakeasy-sdks/openai-php-sdk';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return Gpt::SERVERS[$this->serverIndex];
	}
	
}