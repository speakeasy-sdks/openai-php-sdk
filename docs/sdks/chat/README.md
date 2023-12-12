# Chat


## Overview

Given a list of messages comprising a conversation, the model will return a response.

### Available Operations

* [createChatCompletion](#createchatcompletion) - Creates a model response for the given chat conversation.

## createChatCompletion

Creates a model response for the given chat conversation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateChatCompletionRequest();
    $request->frequencyPenalty = 7707.26;
    $request->functionCall = 'string';
    $request->functions = [
        new Shared\ChatCompletionFunctions(),
    ];
    $request->logitBias = [
        'navigate' => 817435,
    ];
    $request->maxTokens = 21872;
    $request->messages = [
        'string',
    ];
    $request->model = 'gpt-3.5-turbo';
    $request->n = 1;
    $request->presencePenalty = 4012.48;
    $request->responseFormat = new Shared\ResponseFormat();
    $request->responseFormat->type = Shared\CreateChatCompletionRequestType::JsonObject;
    $request->seed = 313767;
    $request->stop = 'string';
    $request->stream = false;
    $request->temperature = 1;
    $request->toolChoice = 'string';
    $request->tools = [
        new Shared\ChatCompletionTool(),
    ];
    $request->topP = 1;
    $request->user = 'user-1234';;

    $response = $sdk->chat->createChatCompletion($request);

    if ($response->createChatCompletionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Shared\CreateChatCompletionRequest](../../Models/Shared/CreateChatCompletionRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateChatCompletionResponse](../../Models/Operations/CreateChatCompletionResponse.md)**

