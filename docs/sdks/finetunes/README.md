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


    $response = $sdk->fineTunes->cancelFineTune('ft-AF1WoRqd3aJAHsqc9NY7iL8F');

    if ($response->fineTune !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                              | Type                                   | Required                               | Description                            | Example                                |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `fineTuneId`                           | *string*                               | :heavy_check_mark:                     | The ID of the fine-tune job to cancel<br/> | ft-AF1WoRqd3aJAHsqc9NY7iL8F            |


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
    $request->classificationPositiveClass = 'string';
    $request->computeClassificationMetrics = false;
    $request->hyperparameters = new CreateFineTuneRequestHyperparameters();
    $request->hyperparameters->nEpochs = 'string';
    $request->learningRateMultiplier = 5912.51;
    $request->model = 'curie';
    $request->promptLossWeight = 7119.5;
    $request->suffix = 'string';
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


    $response = $sdk->fineTunes->listFineTuneEvents('ft-AF1WoRqd3aJAHsqc9NY7iL8F', false);

    if ($response->listFineTuneEventsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                                                                                                                                                                                                                             | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `fineTuneId`                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                      | The ID of the fine-tune job to get events for.<br/>                                                                                                                                                                                                                                                                                                                                                                                                     | ft-AF1WoRqd3aJAHsqc9NY7iL8F                                                                                                                                                                                                                                                                                                                                                                                                                             |
| `stream`                                                                                                                                                                                                                                                                                                                                                                                                                                                | *bool*                                                                                                                                                                                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                      | Whether to stream events for the fine-tune job. If set to true,<br/>events will be sent as data-only<br/>[server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format)<br/>as they become available. The stream will terminate with a<br/>`data: [DONE]` message when the job is finished (succeeded, cancelled,<br/>or failed).<br/><br/>If set to false, only events generated so far will be returned.<br/> |                                                                                                                                                                                                                                                                                                                                                                                                                                                         |


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


    $response = $sdk->fineTunes->retrieveFineTune('ft-AF1WoRqd3aJAHsqc9NY7iL8F');

    if ($response->fineTune !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                    | Type                         | Required                     | Description                  | Example                      |
| ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| `fineTuneId`                 | *string*                     | :heavy_check_mark:           | The ID of the fine-tune job<br/> | ft-AF1WoRqd3aJAHsqc9NY7iL8F  |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveFineTuneResponse](../../models/operations/RetrieveFineTuneResponse.md)**

