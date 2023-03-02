<?php

declare(strict_types=1);

namespace Openai\SDK;

class OpenAI 
{
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;

	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
    
    /**
     * cancelFineTune - Immediately cancel a fine-tune job.
     * 
    */
    public function cancelFineTune(\Openai\SDK\Models\Operations\CancelFineTuneRequest $request): \Openai\SDK\Models\Operations\CancelFineTuneResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/fine-tunes/{fine_tune_id}/cancel', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CancelFineTuneResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fineTune = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createAnswer - Answers the specified question using the provided documents and examples.
     * 
     * The endpoint first [searches](/docs/api-reference/searches) over provided documents or files to find relevant context. The relevant context is combined with the provided examples and question to create the prompt for [completion](/docs/api-reference/completions).
     * 
    */
    public function createAnswer(\Openai\SDK\Models\Operations\CreateAnswerRequest $request): \Openai\SDK\Models\Operations\CreateAnswerResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/answers');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateAnswerResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createAnswerResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateAnswerResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createChatCompletion - Creates a completion for the chat message
    */
    public function createChatCompletion(\Openai\SDK\Models\Operations\CreateChatCompletionRequest $request): \Openai\SDK\Models\Operations\CreateChatCompletionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/chat/completions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateChatCompletionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createChatCompletionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateChatCompletionResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createClassification - Classifies the specified `query` using provided examples.
     * 
     * The endpoint first [searches](/docs/api-reference/searches) over the labeled examples
     * to select the ones most relevant for the particular query. Then, the relevant examples
     * are combined with the query to construct a prompt to produce the final label via the
     * [completions](/docs/api-reference/completions) endpoint.
     * 
     * Labeled examples can be provided via an uploaded `file`, or explicitly listed in the
     * request using the `examples` parameter for quick tests and small scale use cases.
     * 
    */
    public function createClassification(\Openai\SDK\Models\Operations\CreateClassificationRequest $request): \Openai\SDK\Models\Operations\CreateClassificationResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/classifications');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateClassificationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createClassificationResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateClassificationResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createCompletion - Creates a completion for the provided prompt and parameters
    */
    public function createCompletion(\Openai\SDK\Models\Operations\CreateCompletionRequest $request): \Openai\SDK\Models\Operations\CreateCompletionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/completions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateCompletionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCompletionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateCompletionResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createEdit - Creates a new edit for the provided input, instruction, and parameters.
    */
    public function createEdit(\Openai\SDK\Models\Operations\CreateEditRequest $request): \Openai\SDK\Models\Operations\CreateEditResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/edits');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateEditResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createEditResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateEditResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createEmbedding - Creates an embedding vector representing the input text.
    */
    public function createEmbedding(\Openai\SDK\Models\Operations\CreateEmbeddingRequest $request): \Openai\SDK\Models\Operations\CreateEmbeddingResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/embeddings');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateEmbeddingResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createEmbeddingResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateEmbeddingResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createFile - Upload a file that contains document(s) to be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please contact us if you need to increase the storage limit.
     * 
    */
    public function createFile(\Openai\SDK\Models\Operations\CreateFileRequest $request): \Openai\SDK\Models\Operations\CreateFileResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/files');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateFileResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->openAIFile = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createFineTune - Creates a job that fine-tunes a specified model from a given dataset.
     * 
     * Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.
     * 
     * [Learn more about Fine-tuning](/docs/guides/fine-tuning)
     * 
    */
    public function createFineTune(\Openai\SDK\Models\Operations\CreateFineTuneRequest $request): \Openai\SDK\Models\Operations\CreateFineTuneResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/fine-tunes');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateFineTuneResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fineTune = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createImage - Creates an image given a prompt.
    */
    public function createImage(\Openai\SDK\Models\Operations\CreateImageRequest $request): \Openai\SDK\Models\Operations\CreateImageResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/images/generations');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateImageResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->imagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createImageEdit - Creates an edited or extended image given an original image and a prompt.
    */
    public function createImageEdit(\Openai\SDK\Models\Operations\CreateImageEditRequest $request): \Openai\SDK\Models\Operations\CreateImageEditResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/images/edits');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateImageEditResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->imagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createImageVariation - Creates a variation of a given image.
    */
    public function createImageVariation(\Openai\SDK\Models\Operations\CreateImageVariationRequest $request): \Openai\SDK\Models\Operations\CreateImageVariationResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/images/variations');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateImageVariationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->imagesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createModeration - Classifies if text violates OpenAI's Content Policy
    */
    public function createModeration(\Openai\SDK\Models\Operations\CreateModerationRequest $request): \Openai\SDK\Models\Operations\CreateModerationResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/moderations');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateModerationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createModerationResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateModerationResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createSearch - The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.
     * 
     * To go beyond the 200 document limit, documents can be processed offline and then used for efficient retrieval at query time. When `file` is set, the search endpoint searches over all the documents in the given file and returns up to the `max_rerank` number of documents. These documents will be returned along with their search scores.
     * 
     * The similarity score is a positive score that usually ranges from 0 to 300 (but can sometimes go higher), where a score above 200 usually means the document is semantically similar to the query.
     * 
    */
    public function createSearch(\Openai\SDK\Models\Operations\CreateSearchRequest $request): \Openai\SDK\Models\Operations\CreateSearchResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/engines/{engine_id}/search', $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateSearchResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createSearchResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateSearchResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createTranscription - Transcribes audio into the input language.
    */
    public function createTranscription(\Openai\SDK\Models\Operations\CreateTranscriptionRequest $request): \Openai\SDK\Models\Operations\CreateTranscriptionResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/audio/transcriptions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateTranscriptionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createTranscriptionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateTranscriptionResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * createTranslation - Translates audio into into English.
    */
    public function createTranslation(\Openai\SDK\Models\Operations\CreateTranslationRequest $request): \Openai\SDK\Models\Operations\CreateTranslationResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/audio/translations');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\CreateTranslationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createTranslationResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\CreateTranslationResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * deleteFile - Delete a file.
    */
    public function deleteFile(\Openai\SDK\Models\Operations\DeleteFileRequest $request): \Openai\SDK\Models\Operations\DeleteFileResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/files/{file_id}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\DeleteFileResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteFileResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\DeleteFileResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * deleteModel - Delete a fine-tuned model. You must have the Owner role in your organization.
    */
    public function deleteModel(\Openai\SDK\Models\Operations\DeleteModelRequest $request): \Openai\SDK\Models\Operations\DeleteModelResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/models/{model}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\DeleteModelResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteModelResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\DeleteModelResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * downloadFile - Returns the contents of the specified file
    */
    public function downloadFile(\Openai\SDK\Models\Operations\DownloadFileRequest $request): \Openai\SDK\Models\Operations\DownloadFileResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/files/{file_id}/content', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\DownloadFileResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $response->downloadFile200ApplicationJSONString = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
    
    /**
     * listEngines - Lists the currently available (non-finetuned) models, and provides basic information about each one such as the owner and availability.
    */
    public function listEngines(): \Openai\SDK\Models\Operations\ListEnginesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/engines');
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\ListEnginesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listEnginesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ListEnginesResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * listFiles - Returns a list of files that belong to the user's organization.
    */
    public function listFiles(): \Openai\SDK\Models\Operations\ListFilesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/files');
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\ListFilesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listFilesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ListFilesResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * listFineTuneEvents - Get fine-grained status updates for a fine-tune job.
     * 
    */
    public function listFineTuneEvents(\Openai\SDK\Models\Operations\ListFineTuneEventsRequest $request): \Openai\SDK\Models\Operations\ListFineTuneEventsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/fine-tunes/{fine_tune_id}/events', $request->pathParams);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams($request->queryParams));
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\ListFineTuneEventsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listFineTuneEventsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ListFineTuneEventsResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * listFineTunes - List your organization's fine-tuning jobs
     * 
    */
    public function listFineTunes(): \Openai\SDK\Models\Operations\ListFineTunesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/fine-tunes');
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\ListFineTunesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listFineTunesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ListFineTunesResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * listModels - Lists the currently available models, and provides basic information about each one such as the owner and availability.
    */
    public function listModels(): \Openai\SDK\Models\Operations\ListModelsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/models');
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\ListModelsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listModelsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'Openai\SDK\Models\Shared\ListModelsResponse', 'json');
            }
        }

        return $response;
    }
    
    /**
     * retrieveEngine - Retrieves a model instance, providing basic information about it such as the owner and availability.
    */
    public function retrieveEngine(\Openai\SDK\Models\Operations\RetrieveEngineRequest $request): \Openai\SDK\Models\Operations\RetrieveEngineResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/engines/{engine_id}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\RetrieveEngineResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->engine = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * retrieveFile - Returns information about a specific file.
    */
    public function retrieveFile(\Openai\SDK\Models\Operations\RetrieveFileRequest $request): \Openai\SDK\Models\Operations\RetrieveFileResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/files/{file_id}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\RetrieveFileResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->openAIFile = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * retrieveFineTune - Gets info about the fine-tune job.
     * 
     * [Learn more about Fine-tuning](/docs/guides/fine-tuning)
     * 
    */
    public function retrieveFineTune(\Openai\SDK\Models\Operations\RetrieveFineTuneRequest $request): \Openai\SDK\Models\Operations\RetrieveFineTuneResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/fine-tunes/{fine_tune_id}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\RetrieveFineTuneResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->fineTune = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
    
    /**
     * retrieveModel - Retrieves a model instance, providing basic information about the model such as the owner and permissioning.
    */
    public function retrieveModel(\Openai\SDK\Models\Operations\RetrieveModelRequest $request): \Openai\SDK\Models\Operations\RetrieveModelResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/models/{model}', $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \Openai\SDK\Models\Operations\RetrieveModelResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->model = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }

        return $response;
    }
}