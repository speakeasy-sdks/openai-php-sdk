# Moderations


## Overview

Given a input text, outputs if the model classifies it as potentially harmful.

### Available Operations

* [createModeration](#createmoderation) - Classifies if text is potentially harmful.

## createModeration

Classifies if text is potentially harmful.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateModerationRequest();
    $request->input = '<value>';
    $request->model = 'text-moderation-stable';;

    $response = $sdk->moderations->createModeration($request);

    if ($response->createModerationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Shared\CreateModerationRequest](../../Models/Shared/CreateModerationRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\CreateModerationResponse](../../Models/Operations/CreateModerationResponse.md)**

