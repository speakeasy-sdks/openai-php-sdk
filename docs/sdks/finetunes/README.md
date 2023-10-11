# FineTunes
(*fineTunes*)

## Overview

Manage legacy fine-tuning jobs to tailor a model to your specific training data.

### Available Operations

* [~~cancelFineTune~~](#cancelfinetune) - Immediately cancel a fine-tune job.
 :warning: **Deprecated**
* [~~createFineTune~~](#createfinetune) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)
 :warning: **Deprecated**
* [~~listFineTuneEvents~~](#listfinetuneevents) - Get fine-grained status updates for a fine-tune job.
 :warning: **Deprecated**
* [~~listFineTunes~~](#listfinetunes) - List your organization's fine-tuning jobs
 :warning: **Deprecated**
* [~~retrieveFineTune~~](#retrievefinetune) - Gets info about the fine-tune job.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)
 :warning: **Deprecated**

## ~~cancelFineTune~~

Immediately cancel a fine-tune job.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\CancelFineTuneRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CancelFineTuneRequest();
    $request->fineTuneId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->fineTunes->cancelFineTune($request);

    if ($response->fineTune !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Openai\SDK\Models\Operations\CancelFineTuneRequest](../../models/operations/CancelFineTuneRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Openai\SDK\Models\Operations\CancelFineTuneResponse](../../models/operations/CancelFineTuneResponse.md)**


## ~~createFineTune~~

Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateFineTuneRequest;
use \Openai\SDK\Models\Shared\CreateFineTuneRequestHyperparameters;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateFineTuneRequest();
    $request->batchSize = 763928;
    $request->classificationBetas = [
        3993.02,
    ];
    $request->classificationNClasses = 172686;
    $request->classificationPositiveClass = 'male Buckinghamshire';
    $request->computeClassificationMetrics = false;
    $request->hyperparameters = new CreateFineTuneRequestHyperparameters();
    $request->hyperparameters->nEpochs = 'payment';
    $request->learningRateMultiplier = 4413.8;
    $request->model = 'curie';
    $request->promptLossWeight = 37.22;
    $request->suffix = 'Reggae Gorgeous synthesizing';
    $request->trainingFile = 'file-abc123';
    $request->validationFile = 'file-abc123';

    $response = $sdk->fineTunes->createFineTune($request);

    if ($response->fineTune !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\Openai\SDK\Models\Shared\CreateFineTuneRequest](../../models/shared/CreateFineTuneRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\Openai\SDK\Models\Operations\CreateFineTuneResponse](../../models/operations/CreateFineTuneResponse.md)**


## ~~listFineTuneEvents~~

Get fine-grained status updates for a fine-tune job.


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\ListFineTuneEventsRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListFineTuneEventsRequest();
    $request->fineTuneId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';
    $request->stream = false;

    $response = $sdk->fineTunes->listFineTuneEvents($request);

    if ($response->listFineTuneEventsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Openai\SDK\Models\Operations\ListFineTuneEventsRequest](../../models/operations/ListFineTuneEventsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Openai\SDK\Models\Operations\ListFineTuneEventsResponse](../../models/operations/ListFineTuneEventsResponse.md)**


## ~~listFineTunes~~

List your organization's fine-tuning jobs


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

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
    $response = $sdk->fineTunes->listFineTunes();

    if ($response->listFineTunesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListFineTunesResponse](../../models/operations/ListFineTunesResponse.md)**


## ~~retrieveFineTune~~

Gets info about the fine-tune job.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)


> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\RetrieveFineTuneRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RetrieveFineTuneRequest();
    $request->fineTuneId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->fineTunes->retrieveFineTune($request);

    if ($response->fineTune !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Operations\RetrieveFineTuneRequest](../../models/operations/RetrieveFineTuneRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveFineTuneResponse](../../models/operations/RetrieveFineTuneResponse.md)**

