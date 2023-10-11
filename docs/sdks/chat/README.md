# Chat
(*chat*)

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

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateChatCompletionRequest;
use \Openai\SDK\Models\Shared\ChatCompletionFunctions;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessage;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageFunctionCall;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateChatCompletionRequest();
    $request->frequencyPenalty = 7707.26;
    $request->functionCall = 'navigate';
    $request->functions = [
        new ChatCompletionFunctions(),
    ];
    $request->logitBias = [
        'Diesel' => 401248,
    ];
    $request->maxTokens = 313767;
    $request->messages = [
        new ChatCompletionRequestMessage(),
    ];
    $request->model = 'gpt-3.5-turbo';
    $request->n = 1;
    $request->presencePenalty = 1973.05;
    $request->stop = 'Web';
    $request->stream = false;
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'user-1234';

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
| `$request`                                                                                                  | [\Openai\SDK\Models\Shared\CreateChatCompletionRequest](../../models/shared/CreateChatCompletionRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateChatCompletionResponse](../../models/operations/CreateChatCompletionResponse.md)**

