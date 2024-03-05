<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK;

class Audio 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Generates audio from the input text.
     * 
     * @param \Openai\SDK\Models\Shared\CreateSpeechRequest $request
     * @return \Openai\SDK\Models\Operations\CreateSpeechResponse
     */
	public function createSpeech(
        \Openai\SDK\Models\Shared\CreateSpeechRequest $request,
    ): \Openai\SDK\Models\Operations\CreateSpeechResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/audio/speech');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/octet-stream';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Openai\SDK\Models\Operations\CreateSpeechResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/octet-stream')) {
                $response->bytes = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Transcribes audio into the input language.
     * 
     * @param \Openai\SDK\Models\Shared\CreateTranscriptionRequest $request
     * @return \Openai\SDK\Models\Operations\CreateTranscriptionResponse
     */
	public function createTranscription(
        \Openai\SDK\Models\Shared\CreateTranscriptionRequest $request,
    ): \Openai\SDK\Models\Operations\CreateTranscriptionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/audio/transcriptions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "multipart");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Openai\SDK\Models\Operations\CreateTranscriptionResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->oneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Translates audio into English.
     * 
     * @param \Openai\SDK\Models\Shared\CreateTranslationRequest $request
     * @return \Openai\SDK\Models\Operations\CreateTranslationResponse
     */
	public function createTranslation(
        \Openai\SDK\Models\Shared\CreateTranslationRequest $request,
    ): \Openai\SDK\Models\Operations\CreateTranslationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/audio/translations');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "multipart");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Openai\SDK\Models\Operations\CreateTranslationResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->oneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
}