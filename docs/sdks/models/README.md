# Models
(*models*)

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
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\DeleteModelRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteModelRequest();
    $request->model = 'ft:gpt-3.5-turbo:acemeco:suffix:abc123';

    $response = $sdk->models->deleteModel($request);

    if ($response->deleteModelResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\Openai\SDK\Models\Operations\DeleteModelRequest](../../models/operations/DeleteModelRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\DeleteModelResponse](../../models/operations/DeleteModelResponse.md)**


## listModels

Lists the currently available models, and provides basic information about each one such as the owner and availability.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->models->listModels();

    if ($response->listModelsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListModelsResponse](../../models/operations/ListModelsResponse.md)**


## retrieveModel

Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\RetrieveModelRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RetrieveModelRequest();
    $request->model = 'gpt-3.5-turbo';

    $response = $sdk->models->retrieveModel($request);

    if ($response->model !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\Openai\SDK\Models\Operations\RetrieveModelRequest](../../models/operations/RetrieveModelRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveModelResponse](../../models/operations/RetrieveModelResponse.md)**

