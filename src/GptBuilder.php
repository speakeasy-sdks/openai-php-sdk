<?php

declare(strict_types=1);

namespace Openai\SDK;

class GptBuilder
{
    private ?\GuzzleHttp\ClientInterface $client;
    
    private string $serverUrl;
    /** @var array<string, string> */
    private ?array $params;

    public function __construct() {
        $this->client = null;
        
        $this->serverUrl = '';
        $this->params = null;
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return GptBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): GptBuilder
    {
        $this->client = $client;
        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return GptBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): GptBuilder
    {
        $this->serverUrl = $serverUrl;
        if ($params !== null) {
            $this->params = $params;
        }
        return $this;
    }
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return Gpt
     */
    public function build(): Gpt
    {
        return new Gpt($this->client, $this->serverUrl, $this->params);
    }
}