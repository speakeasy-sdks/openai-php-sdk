<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK;

class Images 
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
     * Creates an image given a prompt.
     * 
     * @param \Openai\SDK\Models\Shared\CreateImageRequest $request
     * @return \Openai\SDK\Models\Operations\CreateImageResponse
     */
	public function createImage(
        \Openai\SDK\Models\Shared\CreateImageRequest $request,
    ): \Openai\SDK\Models\Operations\CreateImageResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/images/generations');
        
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

        $response = new \Openai\SDK\Models\Operations\CreateImageResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->imagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ImagesResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Creates an edited or extended image given an original image and a prompt.
     * 
     * @param \Openai\SDK\Models\Shared\CreateImageEditRequest $request
     * @return \Openai\SDK\Models\Operations\CreateImageEditResponse
     */
	public function createImageEdit(
        \Openai\SDK\Models\Shared\CreateImageEditRequest $request,
    ): \Openai\SDK\Models\Operations\CreateImageEditResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/images/edits');
        
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

        $response = new \Openai\SDK\Models\Operations\CreateImageEditResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->imagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ImagesResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Creates a variation of a given image.
     * 
     * @param \Openai\SDK\Models\Shared\CreateImageVariationRequest $request
     * @return \Openai\SDK\Models\Operations\CreateImageVariationResponse
     */
	public function createImageVariation(
        \Openai\SDK\Models\Shared\CreateImageVariationRequest $request,
    ): \Openai\SDK\Models\Operations\CreateImageVariationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/images/variations');
        
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

        $response = new \Openai\SDK\Models\Operations\CreateImageVariationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->imagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ImagesResponse', 'json');
            }
        }

        return $response;
    }
}