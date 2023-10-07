# OpenAI
(*openAI*)

## Overview

The OpenAI REST API

### Available Operations

* [~~cancelFineTune~~](#cancelfinetune) - Immediately cancel a fine-tune job.
 :warning: **Deprecated**
* [cancelFineTuningJob](#cancelfinetuningjob) - Immediately cancel a fine-tune job.

* [createChatCompletion](#createchatcompletion) - Creates a model response for the given chat conversation.
* [createCompletion](#createcompletion) - Creates a completion for the provided prompt and parameters.
* [~~createEdit~~](#createedit) - Creates a new edit for the provided input, instruction, and parameters. :warning: **Deprecated**
* [createEmbedding](#createembedding) - Creates an embedding vector representing the input text.
* [createFile](#createfile) - Upload a file that can be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please [contact us](https://help.openai.com/) if you need to increase the storage limit.

* [~~createFineTune~~](#createfinetune) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)
 :warning: **Deprecated**
* [createFineTuningJob](#createfinetuningjob) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/fine-tuning)

* [createImage](#createimage) - Creates an image given a prompt.
* [createImageEdit](#createimageedit) - Creates an edited or extended image given an original image and a prompt.
* [createImageVariation](#createimagevariation) - Creates a variation of a given image.
* [createModeration](#createmoderation) - Classifies if text violates OpenAI's Content Policy
* [createTranscription](#createtranscription) - Transcribes audio into the input language.
* [createTranslation](#createtranslation) - Translates audio into English.
* [deleteFile](#deletefile) - Delete a file.
* [deleteModel](#deletemodel) - Delete a fine-tuned model. You must have the Owner role in your organization to delete a model.
* [downloadFile](#downloadfile) - Returns the contents of the specified file.
* [listFiles](#listfiles) - Returns a list of files that belong to the user's organization.
* [~~listFineTuneEvents~~](#listfinetuneevents) - Get fine-grained status updates for a fine-tune job.
 :warning: **Deprecated**
* [~~listFineTunes~~](#listfinetunes) - List your organization's fine-tuning jobs
 :warning: **Deprecated**
* [listFineTuningEvents](#listfinetuningevents) - Get status updates for a fine-tuning job.

* [listModels](#listmodels) - Lists the currently available models, and provides basic information about each one such as the owner and availability.
* [listPaginatedFineTuningJobs](#listpaginatedfinetuningjobs) - List your organization's fine-tuning jobs

* [retrieveFile](#retrievefile) - Returns information about a specific file.
* [~~retrieveFineTune~~](#retrievefinetune) - Gets info about the fine-tune job.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)
 :warning: **Deprecated**
* [retrieveFineTuningJob](#retrievefinetuningjob) - Get info about a fine-tuning job.

[Learn more about fine-tuning](/docs/guides/fine-tuning)

* [retrieveModel](#retrievemodel) - Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CancelFineTuneRequest();
    $request->fineTuneId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->openAI->cancelFineTune($request);

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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CancelFineTuningJobRequest();
    $request->fineTuningJobId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->openAI->cancelFineTuningJob($request);

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


## createChatCompletion

Creates a model response for the given chat conversation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateChatCompletionRequest;
use \Openai\SDK\Models\Shared\ChatCompletionFunctions;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessage;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageFunctionCall;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateChatCompletionRequest();
    $request->frequencyPenalty = 7707.26;
    $request->functionCall = 'navigate';
    $request->functions = [
        new ChatCompletionFunctions(),
    ];
    $request->logitBias = [
        'Diesel' => 401248,
    ];
    $request->maxTokens = 313767;
    $request->messages = [
        new ChatCompletionRequestMessage(),
    ];
    $request->model = 'gpt-3.5-turbo';
    $request->n = 1;
    $request->presencePenalty = 1973.05;
    $request->stop = 'Web';
    $request->stream = false;
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'user-1234';

    $response = $sdk->openAI->createChatCompletion($request);

    if ($response->createChatCompletionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Shared\CreateChatCompletionRequest](../../models/shared/CreateChatCompletionRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateChatCompletionResponse](../../models/operations/CreateChatCompletionResponse.md)**


## createCompletion

Creates a completion for the provided prompt and parameters.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateCompletionRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateCompletionRequest();
    $request->bestOf = 160667;
    $request->echo = false;
    $request->frequencyPenalty = 141.61;
    $request->logitBias = [
        'Concrete' => 877910,
    ];
    $request->logprobs = 591562;
    $request->maxTokens = 16;
    $request->model = 'Radon';
    $request->n = 1;
    $request->presencePenalty = 689.63;
    $request->prompt = 'failing';
    $request->stop = 'B2B';
    $request->stream = false;
    $request->suffix = 'test.';
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'user-1234';

    $response = $sdk->openAI->createCompletion($request);

    if ($response->createCompletionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Shared\CreateCompletionRequest](../../models/shared/CreateCompletionRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\CreateCompletionResponse](../../models/operations/CreateCompletionResponse.md)**


## ~~createEdit~~

Creates a new edit for the provided input, instruction, and parameters.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateEditRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateEditRequest();
    $request->input = 'What day of the wek is it?';
    $request->instruction = 'Fix the spelling mistakes.';
    $request->model = 'text-davinci-edit-001';
    $request->n = 1;
    $request->temperature = 1;
    $request->topP = 1;

    $response = $sdk->openAI->createEdit($request);

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
| `$request`                                                                              | [\Openai\SDK\Models\Shared\CreateEditRequest](../../models/shared/CreateEditRequest.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\Openai\SDK\Models\Operations\CreateEditResponse](../../models/operations/CreateEditResponse.md)**


## createEmbedding

Creates an embedding vector representing the input text.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$sdk = Gpt::builder()
    ->build();

try {
    $request = [
        'chief' => 'compressing',
    ]

    $response = $sdk->openAI->createEmbedding($request);

    if ($response->createEmbeddingResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\Openai\SDK\Models\Operations\CreateEmbeddingResponse](../../models/operations/CreateEmbeddingResponse.md)**


## createFile

Upload a file that can be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please [contact us](https://help.openai.com/) if you need to increase the storage limit.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$sdk = Gpt::builder()
    ->build();

try {
    $request = [
        'Associate' => 'Miami',
    ]

    $response = $sdk->openAI->createFile($request);

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\Openai\SDK\Models\Operations\CreateFileResponse](../../models/operations/CreateFileResponse.md)**


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

$sdk = Gpt::builder()
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
    $request->learningRateMultiplier = 4447.26;
    $request->model = 'curie';
    $request->nEpochs = 592749;
    $request->promptLossWeight = 4413.8;
    $request->suffix = 'next';
    $request->trainingFile = 'file-abc123';
    $request->validationFile = 'file-abc123';

    $response = $sdk->openAI->createFineTune($request);

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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateFineTuningJobRequest();
    $request->hyperparameters = new CreateFineTuningJobRequestHyperparameters();
    $request->hyperparameters->nEpochs = 'empower';
    $request->model = 'gpt-3.5-turbo';
    $request->suffix = 'Thallium';
    $request->trainingFile = 'file-abc123';
    $request->validationFile = 'file-abc123';

    $response = $sdk->openAI->createFineTuningJob($request);

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


## createImage

Creates an image given a prompt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateImageRequest;
use \Openai\SDK\Models\Shared\CreateImageRequestResponseFormat;
use \Openai\SDK\Models\Shared\CreateImageRequestSize;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateImageRequest();
    $request->n = 1;
    $request->prompt = 'A cute baby sea otter';
    $request->responseFormat = CreateImageRequestResponseFormat::Url;
    $request->size = CreateImageRequestSize::OneThousandAndTwentyFourx1024;
    $request->user = 'user-1234';

    $response = $sdk->openAI->createImage($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\Openai\SDK\Models\Shared\CreateImageRequest](../../models/shared/CreateImageRequest.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\Openai\SDK\Models\Operations\CreateImageResponse](../../models/operations/CreateImageResponse.md)**


## createImageEdit

Creates an edited or extended image given an original image and a prompt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateImageEditRequest;
use \Openai\SDK\Models\Shared\CreateImageEditRequestImage;
use \Openai\SDK\Models\Shared\CreateImageEditRequestMask;
use \Openai\SDK\Models\Shared\CreateImageEditRequestResponseFormat;
use \Openai\SDK\Models\Shared\CreateImageEditRequestSize;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateImageEditRequest();
    $request->image = new CreateImageEditRequestImage();
    $request->image->content = '0]/(|3W_T9';
    $request->image->image = 'https://loremflickr.com/640/480';
    $request->mask = new CreateImageEditRequestMask();
    $request->mask->content = '`^YjrpxopK';
    $request->mask->mask = 'Rap Dodge Incredible';
    $request->n = 1;
    $request->prompt = 'A cute baby sea otter wearing a beret';
    $request->responseFormat = CreateImageEditRequestResponseFormat::Url;
    $request->size = CreateImageEditRequestSize::OneThousandAndTwentyFourx1024;
    $request->user = 'user-1234';

    $response = $sdk->openAI->createImageEdit($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\Openai\SDK\Models\Shared\CreateImageEditRequest](../../models/shared/CreateImageEditRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CreateImageEditResponse](../../models/operations/CreateImageEditResponse.md)**


## createImageVariation

Creates a variation of a given image.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateImageVariationRequest;
use \Openai\SDK\Models\Shared\CreateImageVariationRequestImage;
use \Openai\SDK\Models\Shared\CreateImageVariationRequestResponseFormat;
use \Openai\SDK\Models\Shared\CreateImageVariationRequestSize;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateImageVariationRequest();
    $request->image = new CreateImageVariationRequestImage();
    $request->image->content = '`YY7PCrWuK';
    $request->image->image = 'https://loremflickr.com/640/480';
    $request->n = 1;
    $request->responseFormat = CreateImageVariationRequestResponseFormat::Url;
    $request->size = CreateImageVariationRequestSize::OneThousandAndTwentyFourx1024;
    $request->user = 'user-1234';

    $response = $sdk->openAI->createImageVariation($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Shared\CreateImageVariationRequest](../../models/shared/CreateImageVariationRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateImageVariationResponse](../../models/operations/CreateImageVariationResponse.md)**


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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateModerationRequest();
    $request->input = 'stable';
    $request->model = 'text-moderation-stable';

    $response = $sdk->openAI->createModeration($request);

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


## createTranscription

Transcribes audio into the input language.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$sdk = Gpt::builder()
    ->build();

try {
    $request = [
        'Lead' => 'neutral',
    ]

    $response = $sdk->openAI->createTranscription($request);

    if ($response->createTranscriptionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\Openai\SDK\Models\Operations\CreateTranscriptionResponse](../../models/operations/CreateTranscriptionResponse.md)**


## createTranslation

Translates audio into English.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$sdk = Gpt::builder()
    ->build();

try {
    $request = [
        'DRAM' => 'Granite',
    ]

    $response = $sdk->openAI->createTranslation($request);

    if ($response->createTranslationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\Openai\SDK\Models\Operations\CreateTranslationResponse](../../models/operations/CreateTranslationResponse.md)**


## deleteFile

Delete a file.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\DeleteFileRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new DeleteFileRequest();
    $request->fileId = 'yellow kiddingly white';

    $response = $sdk->openAI->deleteFile($request);

    if ($response->deleteFileResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\Openai\SDK\Models\Operations\DeleteFileRequest](../../models/operations/DeleteFileRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\Openai\SDK\Models\Operations\DeleteFileResponse](../../models/operations/DeleteFileResponse.md)**


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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new DeleteModelRequest();
    $request->model = 'ft:gpt-3.5-turbo:acemeco:suffix:abc123';

    $response = $sdk->openAI->deleteModel($request);

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


## downloadFile

Returns the contents of the specified file.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\DownloadFileRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new DownloadFileRequest();
    $request->fileId = 'Maserati Bronze Audi';

    $response = $sdk->openAI->downloadFile($request);

    if ($response->downloadFile200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Operations\DownloadFileRequest](../../models/operations/DownloadFileRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\DownloadFileResponse](../../models/operations/DownloadFileResponse.md)**


## listFiles

Returns a list of files that belong to the user's organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$sdk = Gpt::builder()
    ->build();

try {
    $response = $sdk->openAI->listFiles();

    if ($response->listFilesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListFilesResponse](../../models/operations/ListFilesResponse.md)**


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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new ListFineTuneEventsRequest();
    $request->fineTuneId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';
    $request->stream = false;

    $response = $sdk->openAI->listFineTuneEvents($request);

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

$sdk = Gpt::builder()
    ->build();

try {
    $response = $sdk->openAI->listFineTunes();

    if ($response->listFineTunesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListFineTunesResponse](../../models/operations/ListFineTunesResponse.md)**


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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new ListFineTuningEventsRequest();
    $request->after = 'phew silver Consultant';
    $request->fineTuningJobId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';
    $request->limit = 104325;

    $response = $sdk->openAI->listFineTuningEvents($request);

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


## listModels

Lists the currently available models, and provides basic information about each one such as the owner and availability.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;

$sdk = Gpt::builder()
    ->build();

try {
    $response = $sdk->openAI->listModels();

    if ($response->listModelsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListModelsResponse](../../models/operations/ListModelsResponse.md)**


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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new ListPaginatedFineTuningJobsRequest();
    $request->after = 'GB voluptate';
    $request->limit = 374490;

    $response = $sdk->openAI->listPaginatedFineTuningJobs($request);

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


## retrieveFile

Returns information about a specific file.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Operations\RetrieveFileRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveFileRequest();
    $request->fileId = 'online Facilitator enfold';

    $response = $sdk->openAI->retrieveFile($request);

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Operations\RetrieveFileRequest](../../models/operations/RetrieveFileRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveFileResponse](../../models/operations/RetrieveFileResponse.md)**


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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveFineTuneRequest();
    $request->fineTuneId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->openAI->retrieveFineTune($request);

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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveFineTuningJobRequest();
    $request->fineTuningJobId = 'ft-AF1WoRqd3aJAHsqc9NY7iL8F';

    $response = $sdk->openAI->retrieveFineTuningJob($request);

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

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveModelRequest();
    $request->model = 'gpt-3.5-turbo';

    $response = $sdk->openAI->retrieveModel($request);

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

