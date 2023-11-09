<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK;

class Embeddings 
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
     * Creates an embedding vector representing the input text.
     * 
     * @param \Openai\SDK\Models\Shared\CreateEmbeddingRequest $request
     * @return \Openai\SDK\Models\Operations\CreateEmbeddingResponse
     */
	public function createEmbedding(
        \Openai\SDK\Models\Shared\CreateEmbeddingRequest $request,
    ): \Openai\SDK\Models\Operations\CreateEmbeddingResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/embeddings');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Openai\SDK\Models\Operations\CreateEmbeddingResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createEmbeddingResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateEmbeddingResponse', 'json');
            }
        }

        return $response;
    }
}