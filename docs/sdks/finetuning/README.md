# FineTuning
(*fineTuning*)

## Overview

Manage fine-tuning jobs to tailor a model to your specific training data.

### Available Operations

* [cancelFineTuningJob](#cancelfinetuningjob) - Immediately cancel a fine-tune job.

* [createFineTuningJob](#createfinetuningjob) - Creates a job that fine-tunes a specified model from a given dataset.

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
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\CancelFineTuningJobRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CancelFineTuningJobRequest();
    $request->fineTuningJobId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->fineTuning->cancelFineTuningJob($request);

    if ($response->fineTuningJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Openai\SDK\Models\Operations\CancelFineTuningJobRequest](../../models/operations/CancelFineTuningJobRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CancelFineTuningJobResponse](../../models/operations/CancelFineTuningJobResponse.md)**


## createFineTuningJob

Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/fine-tuning)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateFineTuningJobRequest;
use \Openai\SDK\Models\Shared\CreateFineTuningJobRequestHyperparameters;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateFineTuningJobRequest();
    $request->hyperparameters = new CreateFineTuningJobRequestHyperparameters();
    $request->hyperparameters->nEpochs = 'empower';
    $request->model = 'gpt-3.5-turbo';
    $request->suffix = 'lime';
    $request->trainingFile = 'file-abc123';
    $request->validationFile = 'file-abc123';

    $response = $sdk->fineTuning->createFineTuningJob($request);

    if ($response->fineTuningJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Openai\SDK\Models\Shared\CreateFineTuningJobRequest](../../models/shared/CreateFineTuningJobRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Openai\SDK\Models\Operations\CreateFineTuningJobResponse](../../models/operations/CreateFineTuningJobResponse.md)**


## listFineTuningEvents

Get status updates for a fine-tuning job.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\ListFineTuningEventsRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListFineTuningEventsRequest();
    $request->after = 'vivaciously';
    $request->fineTuningJobId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';
    $request->limit = 762396;

    $response = $sdk->fineTuning->listFineTuningEvents($request);

    if ($response->listFineTuningJobEventsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Openai\SDK\Models\Operations\ListFineTuningEventsRequest](../../models/operations/ListFineTuningEventsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Openai\SDK\Models\Operations\ListFineTuningEventsResponse](../../models/operations/ListFineTuningEventsResponse.md)**


## listPaginatedFineTuningJobs

List your organization's fine-tuning jobs


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\ListPaginatedFineTuningJobsRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListPaginatedFineTuningJobsRequest();
    $request->after = 'implementation';
    $request->limit = 293768;

    $response = $sdk->fineTuning->listPaginatedFineTuningJobs($request);

    if ($response->listPaginatedFineTuningJobsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Openai\SDK\Models\Operations\ListPaginatedFineTuningJobsRequest](../../models/operations/ListPaginatedFineTuningJobsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Openai\SDK\Models\Operations\ListPaginatedFineTuningJobsResponse](../../models/operations/ListPaginatedFineTuningJobsResponse.md)**


## retrieveFineTuningJob

Get info about a fine-tuning job.

[Learn more about fine-tuning](/docs/guides/fine-tuning)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\RetrieveFineTuningJobRequest;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RetrieveFineTuningJobRequest();
    $request->fineTuningJobId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->fineTuning->retrieveFineTuningJob($request);

    if ($response->fineTuningJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Openai\SDK\Models\Operations\RetrieveFineTuningJobRequest](../../models/operations/RetrieveFineTuningJobRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveFineTuningJobResponse](../../models/operations/RetrieveFineTuningJobResponse.md)**

