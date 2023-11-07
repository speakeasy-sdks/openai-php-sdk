# Assistant


### Available Operations

* [modifyAssistant](#modifyassistant) - Modifies an assistant.

## modifyAssistant

Modifies an assistant.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '';

$sdk = SDK\Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $modifyAssistantRequest = new Shared\ModifyAssistantRequest();
    $modifyAssistantRequest->description = 'Assimilated client-driven forecast';
    $modifyAssistantRequest->fileIds = [
        'string',
    ];
    $modifyAssistantRequest->instructions = 'string';
    $modifyAssistantRequest->metadata = new Shared\ModifyAssistantRequestMetadata();
    $modifyAssistantRequest->model = 'Aventador';
    $modifyAssistantRequest->name = 'string';
    $modifyAssistantRequest->tools = [
        'string',
    ];

    $response = $sdk->assistant->modifyAssistant($modifyAssistantRequest, 'string');

    if ($response->assistantObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `modifyAssistantRequest`                                                                          | [\Openai\SDK\Models\Shared\ModifyAssistantRequest](../../models/shared/ModifyAssistantRequest.md) | :heavy_check_mark:                                                                                | N/A                                                                                               |
| `assistantId`                                                                                     | *string*                                                                                          | :heavy_check_mark:                                                                                | The ID of the assistant to modify.                                                                |


### Response

**[?\Openai\SDK\Models\Operations\ModifyAssistantResponse](../../models/operations/ModifyAssistantResponse.md)**

