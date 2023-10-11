# Embeddings
(*embeddings*)

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

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateEmbeddingRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateEmbeddingRequest();
    $request->input = 'The quick brown fox jumped over the lazy dog';
    $request->model = 'text-embedding-ada-002';
    $request->user = 'user-1234';

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
| `$request`                                                                                        | [\Openai\SDK\Models\Shared\CreateEmbeddingRequest](../../models/shared/CreateEmbeddingRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CreateEmbeddingResponse](../../models/operations/CreateEmbeddingResponse.md)**

