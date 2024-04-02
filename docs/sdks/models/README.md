# Models


## Overview

List and describe the various models available in the API.

### Available Operations

* [deleteModel](#deletemodel) - Delete a fine-tuned model. You must have the Owner role in your organization to delete a model.
* [listModels](#listmodels) - Lists the currently available models, and provides basic information about each one such as the owner and availability.
* [retrieveModel](#retrievemodel) - Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

## deleteModel

Delete a fine-tuned model. You must have the Owner role in your organization to delete a model.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->models->deleteModel('ft:gpt-3.5-turbo:acemeco:suffix:abc123');

    if ($response->deleteModelResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                              | Type                                   | Required                               | Description                            | Example                                |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `model`                                | *string*                               | :heavy_check_mark:                     | The model to delete                    | ft:gpt-3.5-turbo:acemeco:suffix:abc123 |


### Response

**[?\Openai\SDK\Models\Operations\DeleteModelResponse](../../Models/Operations/DeleteModelResponse.md)**


## listModels

Lists the currently available models, and provides basic information about each one such as the owner and availability.

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
    $response = $sdk->models->listModels();

    if ($response->listModelsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListModelsResponse](../../Models/Operations/ListModelsResponse.md)**


## retrieveModel

Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->models->retrieveModel('gpt-3.5-turbo');

    if ($response->model !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                   | Type                                        | Required                                    | Description                                 | Example                                     |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `model`                                     | *string*                                    | :heavy_check_mark:                          | The ID of the model to use for this request | gpt-3.5-turbo                               |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveModelResponse](../../Models/Operations/RetrieveModelResponse.md)**

