# Embeddings


## Overview

Get a vector representation of a given input that can be easily consumed by machine learning models and algorithms.

### Available Operations

* [createEmbedding](#createembedding) - Creates an embedding vector representing the input text.

## createEmbedding

Creates an embedding vector representing the input text.

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
        $request = new Shared\CreateEmbeddingRequest();
    $request->encodingFormat = Shared\EncodingFormat::Float;
    $request->input = 'The quick brown fox jumped over the lazy dog';
    $request->model = 'text-embedding-ada-002';
    $request->user = 'user-1234';;

    $response = $sdk->embeddings->createEmbedding($request);

    if ($response->createEmbeddingResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\Openai\SDK\Models\Shared\CreateEmbeddingRequest](../../Models/Shared/CreateEmbeddingRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CreateEmbeddingResponse](../../Models/Operations/CreateEmbeddingResponse.md)**

