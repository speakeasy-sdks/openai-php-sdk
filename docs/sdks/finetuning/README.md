# FineTuning


## Overview

Manage fine-tuning jobs to tailor a model to your specific training data.

### Available Operations

* [cancelFineTuningJob](#cancelfinetuningjob) - Immediately cancel a fine-tune job.

* [createFineTuningJob](#createfinetuningjob) - Creates a fine-tuning job which begins the process of creating a new model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/fine-tuning)

* [listFineTuningEvents](#listfinetuningevents) - Get status updates for a fine-tuning job.

* [listPaginatedFineTuningJobs](#listpaginatedfinetuningjobs) - List your organization's fine-tuning jobs

* [retrieveFineTuningJob](#retrievefinetuningjob) - Get info about a fine-tuning job.

[Learn more about fine-tuning](/docs/guides/fine-tuning)


## cancelFineTuningJob

Immediately cancel a fine-tune job.


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
    

    $response = $sdk->fineTuning->cancelFineTuningJob('ft-AF1WoRqd3aJAHsqc9NY7iL8F');

    if ($response->fineTuningJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               | Example                                   |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `fineTuningJobId`                         | *string*                                  | :heavy_check_mark:                        | The ID of the fine-tuning job to cancel.<br/> | ft-AF1WoRqd3aJAHsqc9NY7iL8F               |


### Response

**[?\Openai\SDK\Models\Operations\CancelFineTuningJobResponse](../../Models/Operations/CancelFineTuningJobResponse.md)**


## createFineTuningJob

Creates a fine-tuning job which begins the process of creating a new model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/fine-tuning)


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
        $request = new Shared\CreateFineTuningJobRequest();
    $request->hyperparameters = new Shared\Hyperparameters();
    $request->hyperparameters->batchSize = '<value>';
    $request->hyperparameters->learningRateMultiplier = '<value>';
    $request->hyperparameters->nEpochs = '<value>';
    $request->model = 'gpt-3.5-turbo';
    $request->suffix = '<value>';
    $request->trainingFile = 'file-abc123';
    $request->validationFile = 'file-abc123';;

    $response = $sdk->fineTuning->createFineTuningJob($request);

    if ($response->fineTuningJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Openai\SDK\Models\Shared\CreateFineTuningJobRequest](../../Models/Shared/CreateFineTuningJobRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Openai\SDK\Models\Operations\CreateFineTuningJobResponse](../../Models/Operations/CreateFineTuningJobResponse.md)**


## listFineTuningEvents

Get status updates for a fine-tuning job.


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
    

    $response = $sdk->fineTuning->listFineTuningEvents('ft-AF1WoRqd3aJAHsqc9NY7iL8F', '<value>', 896841);

    if ($response->listFineTuningJobEventsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                           | Type                                                                | Required                                                            | Description                                                         | Example                                                             |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `fineTuningJobId`                                                   | *string*                                                            | :heavy_check_mark:                                                  | The ID of the fine-tuning job to get events for.<br/>               | ft-AF1WoRqd3aJAHsqc9NY7iL8F                                         |
| `after`                                                             | *string*                                                            | :heavy_minus_sign:                                                  | Identifier for the last event from the previous pagination request. |                                                                     |
| `limit`                                                             | *int*                                                               | :heavy_minus_sign:                                                  | Number of events to retrieve.                                       |                                                                     |


### Response

**[?\Openai\SDK\Models\Operations\ListFineTuningEventsResponse](../../Models/Operations/ListFineTuningEventsResponse.md)**


## listPaginatedFineTuningJobs

List your organization's fine-tuning jobs


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
    

    $response = $sdk->fineTuning->listPaginatedFineTuningJobs('<value>', 385496);

    if ($response->listPaginatedFineTuningJobsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `after`                                                           | *string*                                                          | :heavy_minus_sign:                                                | Identifier for the last job from the previous pagination request. |
| `limit`                                                           | *int*                                                             | :heavy_minus_sign:                                                | Number of fine-tuning jobs to retrieve.                           |


### Response

**[?\Openai\SDK\Models\Operations\ListPaginatedFineTuningJobsResponse](../../Models/Operations/ListPaginatedFineTuningJobsResponse.md)**


## retrieveFineTuningJob

Get info about a fine-tuning job.

[Learn more about fine-tuning](/docs/guides/fine-tuning)


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
    

    $response = $sdk->fineTuning->retrieveFineTuningJob('ft-AF1WoRqd3aJAHsqc9NY7iL8F');

    if ($response->fineTuningJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                       | Type                            | Required                        | Description                     | Example                         |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `fineTuningJobId`               | *string*                        | :heavy_check_mark:              | The ID of the fine-tuning job.<br/> | ft-AF1WoRqd3aJAHsqc9NY7iL8F     |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveFineTuningJobResponse](../../Models/Operations/RetrieveFineTuningJobResponse.md)**

