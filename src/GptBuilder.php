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

    public function setClient(\GuzzleHttp\ClientInterface $client): GptBuilder
    {
        $this->client = $client;
        return $this;
    }
    
    /**
    * Set the server URL and any parameters to interpolate into the URL.
    * @param string $serverUrl
    * @param array<string, string> $params
    * @return GptBuilder
    */
    public function setServerURL(string $serverUrl, ?array $params = null): GptBuilder
    {
        $this->serverUrl = $serverUrl;
        if ($params !== null) {
            $this->params = $params;
        }
        return $this;
    }
    
    public function build(): Gpt
    {
        return new Gpt($this->client, $this->serverUrl, $this->params);
    }
}