# Completions


## Overview

Given a prompt, the model will return one or more predicted completions, and can also return the probabilities of alternative tokens at each position.

### Available Operations

* [createCompletion](#createcompletion) - Creates a completion for the provided prompt and parameters.

## createCompletion

Creates a completion for the provided prompt and parameters.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKeyAuth = '';

$sdk = SDK\Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\CreateCompletionRequest();
    $request->bestOf = 160667;
    $request->echo = false;
    $request->frequencyPenalty = 141.61;
    $request->logitBias = [
        'Concrete' => 877910,
    ];
    $request->logprobs = 591562;
    $request->maxTokens = 16;
    $request->model = 'string';
    $request->n = 1;
    $request->presencePenalty = 7227.62;
    $request->prompt = 'string';
    $request->seed = 723216;
    $request->stop = 'string';
    $request->stream = false;
    $request->suffix = 'test.';
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'user-1234';

    $response = $sdk->completions->createCompletion($request);

    if ($response->createCompletionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Shared\CreateCompletionRequest](../../Models/Shared/CreateCompletionRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\CreateCompletionResponse](../../Models/Operations/CreateCompletionResponse.md)**

