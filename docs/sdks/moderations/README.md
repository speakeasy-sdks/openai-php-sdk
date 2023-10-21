# Moderations
(*moderations*)

## Overview

Given a input text, outputs if the model classifies it as violating OpenAI's content policy.

### Available Operations

* [createModeration](#createmoderation) - Classifies if text violates OpenAI's Content Policy

## createModeration

Classifies if text violates OpenAI's Content Policy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateModerationRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateModerationRequest();
    $request->input = 'string';
    $request->model = 'text-moderation-stable';

    $response = $sdk->moderations->createModeration($request);

    if ($response->createModerationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Shared\CreateModerationRequest](../../models/shared/CreateModerationRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\CreateModerationResponse](../../models/operations/CreateModerationResponse.md)**

