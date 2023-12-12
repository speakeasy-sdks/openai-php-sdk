# Edits


## Overview

Given a prompt and an instruction, the model will return an edited version of the prompt.

### Available Operations

* [~~createEdit~~](#createedit) - Creates a new edit for the provided input, instruction, and parameters. :warning: **Deprecated**

## ~~createEdit~~

Creates a new edit for the provided input, instruction, and parameters.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
        $request = new Shared\CreateEditRequest();
    $request->input = 'What day of the wek is it?';
    $request->instruction = 'Fix the spelling mistakes.';
    $request->model = 'text-davinci-edit-001';
    $request->n = 1;
    $request->temperature = 1;
    $request->topP = 1;;

    $response = $sdk->edits->createEdit($request);

    if ($response->createEditResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `$request`                                                                              | [\Openai\SDK\Models\Shared\CreateEditRequest](../../Models/Shared/CreateEditRequest.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\Openai\SDK\Models\Operations\CreateEditResponse](../../Models/Operations/CreateEditResponse.md)**

