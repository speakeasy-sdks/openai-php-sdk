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
		
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	
	private string $_serverUrl;
	private string $_language = 'php';
	private string $_sdkVersion = '1.9.0';
	private string $_genVersion = '2.26.0';

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
	 * @param \GuzzleHttp\ClientInterface|null $client
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, string $serverUrl, ?array $params)
	{
		$this->_defaultClient = $client;
		
		if ($this->_defaultClient === null) {
			$this->_defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if ($this->_securityClient === null) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[0];
		}
		
		$this->openAI = new OpenAI(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
	}
}