<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK;

class Edits 
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
     * Creates a new edit for the provided input, instruction, and parameters.
     * 
     * @param \Openai\SDK\Models\Shared\CreateEditRequest $request
     * @return \Openai\SDK\Models\Operations\CreateEditResponse
     * @deprecated  method: This will be removed in a future release, please migrate away from it as soon as possible.
     */
	public function createEdit(
        \Openai\SDK\Models\Shared\CreateEditRequest $request,
    ): \Openai\SDK\Models\Operations\CreateEditResponse
    {
        trigger_error('Method ' . __METHOD__ . ' is deprecated', E_USER_DEPRECATED);
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/edits');
        
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

        $response = new \Openai\SDK\Models\Operations\CreateEditResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createEditResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateEditResponse', 'json');
            }
        }

        return $response;
    }
}