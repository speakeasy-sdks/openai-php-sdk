# openAI

## Overview

The OpenAI REST API

### Available Operations

* [cancelFineTune](#cancelfinetune) - Immediately cancel a fine-tune job.

* [createChatCompletion](#createchatcompletion) - Creates a model response for the given chat conversation.
* [createCompletion](#createcompletion) - Creates a completion for the provided prompt and parameters.
* [~~createEdit~~](#createedit) - Creates a new edit for the provided input, instruction, and parameters. :warning: **Deprecated**
* [createEmbedding](#createembedding) - Creates an embedding vector representing the input text.
* [createFile](#createfile) - Upload a file that contains document(s) to be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please contact us if you need to increase the storage limit.

* [createFineTune](#createfinetune) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

* [createImage](#createimage) - Creates an image given a prompt.
* [createImageEdit](#createimageedit) - Creates an edited or extended image given an original image and a prompt.
* [createImageVariation](#createimagevariation) - Creates a variation of a given image.
* [createModeration](#createmoderation) - Classifies if text violates OpenAI's Content Policy
* [createTranscription](#createtranscription) - Transcribes audio into the input language.
* [createTranslation](#createtranslation) - Translates audio into English.
* [deleteFile](#deletefile) - Delete a file.
* [deleteModel](#deletemodel) - Delete a fine-tuned model. You must have the Owner role in your organization.
* [downloadFile](#downloadfile) - Returns the contents of the specified file
* [listFiles](#listfiles) - Returns a list of files that belong to the user's organization.
* [listFineTuneEvents](#listfinetuneevents) - Get fine-grained status updates for a fine-tune job.

* [listFineTunes](#listfinetunes) - List your organization's fine-tuning jobs

* [listModels](#listmodels) - Lists the currently available models, and provides basic information about each one such as the owner and availability.
* [retrieveFile](#retrievefile) - Returns information about a specific file.
* [retrieveFineTune](#retrievefinetune) - Gets info about the fine-tune job.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

* [retrieveModel](#retrievemodel) - Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

## cancelFineTune

Immediately cancel a fine-tune job.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
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


## createChatCompletion

Creates a model response for the given chat conversation.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateChatCompletionRequest;
use \Openai\SDK\Models\Shared\ChatCompletionFunctions;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessage;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageFunctionCall;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateChatCompletionRequest();
    $request->frequencyPenalty = 5488.14;
    $request->functionCall = new CreateChatCompletionRequestFunctionCall2();
    $request->functionCall->name = 'Ellis Mitchell';
    $request->functions = [
        new ChatCompletionFunctions(),
        new ChatCompletionFunctions(),
        new ChatCompletionFunctions(),
        new ChatCompletionFunctions(),
    ];
    $request->logitBias = [
        'error' => 645894,
        'suscipit' => 437587,
    ];
    $request->maxTokens = 297534;
    $request->messages = [
        new ChatCompletionRequestMessage(),
        new ChatCompletionRequestMessage(),
        new ChatCompletionRequestMessage(),
        new ChatCompletionRequestMessage(),
    ];
    $request->model = 'gpt-3.5-turbo';
    $request->n = 1;
    $request->presencePenalty = 9636.63;
    $request->stop = 'suscipit';
    $request->stream = false;
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'molestiae';

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
use \Openai\SDK\Models\Shared\CreateCompletionRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateCompletionRequest();
    $request->bestOf = 791725;
    $request->echo = false;
    $request->frequencyPenalty = 8121.69;
    $request->logitBias = [
        'iusto' => 568045,
        'nisi' => 925597,
        'temporibus' => 71036,
    ];
    $request->logprobs = 337396;
    $request->maxTokens = 16;
    $request->model = 'deserunt';
    $request->n = 1;
    $request->presencePenalty = 202.18;
    $request->prompt = [
        'This is a test.',
        'This is a test.',
        'This is a test.',
        'This is a test.',
    ];
    $request->stop = [
        '["\n"]',
        '["\n"]',
        '["\n"]',
        '["\n"]',
    ];
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

> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
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
use \Openai\SDK\Models\Shared\CreateEmbeddingRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateEmbeddingRequest();
    $request->input = [
        [
            473608,
            799159,
            800911,
            461479,
        ],
        [
            780529,
            678880,
            118274,
        ],
        [
            639921,
            582020,
            143353,
        ],
        [
            944669,
            758616,
            521848,
        ],
    ];
    $request->model = 'text-embedding-ada-002';
    $request->user = 'commodi';

    $response = $sdk->openAI->createEmbedding($request);

    if ($response->createEmbeddingResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\Openai\SDK\Models\Shared\CreateEmbeddingRequest](../../models/shared/CreateEmbeddingRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CreateEmbeddingResponse](../../models/operations/CreateEmbeddingResponse.md)**


## createFile

Upload a file that contains document(s) to be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please contact us if you need to increase the storage limit.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateFileRequest;
use \Openai\SDK\Models\Shared\CreateFileRequestFile;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateFileRequest();
    $request->file = new CreateFileRequestFile();
    $request->file->content = 'molestiae';
    $request->file->file = 'modi';
    $request->purpose = 'qui';

    $response = $sdk->openAI->createFile($request);

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `$request`                                                                              | [\Openai\SDK\Models\Shared\CreateFileRequest](../../models/shared/CreateFileRequest.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\Openai\SDK\Models\Operations\CreateFileResponse](../../models/operations/CreateFileResponse.md)**


## createFineTune

Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateFineTuneRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateFineTuneRequest();
    $request->batchSize = 774234;
    $request->classificationBetas = [
        4561.5,
        2165.5,
        5684.34,
    ];
    $request->classificationNClasses = 135218;
    $request->classificationPositiveClass = 'perferendis';
    $request->computeClassificationMetrics = false;
    $request->learningRateMultiplier = 3241.41;
    $request->model = CreateFineTuneRequestModel2::Curie;
    $request->nEpochs = 149675;
    $request->promptLossWeight = 6120.96;
    $request->suffix = 'dolor';
    $request->trainingFile = 'file-ajSREls59WBbvgSzJSVWxMCB';
    $request->validationFile = 'file-XjSREls59WBbvgSzJSVWxMCa';

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


## createImage

Creates an image given a prompt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
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
    $request->user = 'natus';

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
use \Openai\SDK\Models\Shared\CreateImageEditRequest;
use \Openai\SDK\Models\Shared\CreateImageEditRequestImage;
use \Openai\SDK\Models\Shared\CreateImageEditRequestMask;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateImageEditRequest();
    $request->image = new CreateImageEditRequestImage();
    $request->image->content = 'laboriosam';
    $request->image->image = 'hic';
    $request->mask = new CreateImageEditRequestMask();
    $request->mask->content = 'saepe';
    $request->mask->mask = 'fuga';
    $request->n = 'in';
    $request->prompt = 'A cute baby sea otter wearing a beret';
    $request->responseFormat = 'corporis';
    $request->size = 'iste';
    $request->user = 'iure';

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
use \Openai\SDK\Models\Shared\CreateImageVariationRequest;
use \Openai\SDK\Models\Shared\CreateImageVariationRequestImage;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateImageVariationRequest();
    $request->image = new CreateImageVariationRequestImage();
    $request->image->content = 'saepe';
    $request->image->image = 'quidem';
    $request->n = 'architecto';
    $request->responseFormat = 'ipsa';
    $request->size = 'reiciendis';
    $request->user = 'est';

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
use \Openai\SDK\Models\Shared\CreateModerationRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateModerationRequest();
    $request->input = [
        'I want to kill them.',
        'I want to kill them.',
        'I want to kill them.',
    ];
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
use \Openai\SDK\Models\Shared\CreateTranscriptionRequest;
use \Openai\SDK\Models\Shared\CreateTranscriptionRequestFile;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateTranscriptionRequest();
    $request->file = new CreateTranscriptionRequestFile();
    $request->file->content = 'dolorem';
    $request->file->file = 'corporis';
    $request->language = 'explicabo';
    $request->model = CreateTranscriptionRequestModel2::Whisper1;
    $request->prompt = 'enim';
    $request->responseFormat = 'omnis';
    $request->temperature = 3637.11;

    $response = $sdk->openAI->createTranscription($request);

    if ($response->createTranscriptionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Openai\SDK\Models\Shared\CreateTranscriptionRequest](../../models/shared/CreateTranscriptionRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


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
use \Openai\SDK\Models\Shared\CreateTranslationRequest;
use \Openai\SDK\Models\Shared\CreateTranslationRequestFile;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateTranslationRequest();
    $request->file = new CreateTranslationRequestFile();
    $request->file->content = 'minima';
    $request->file->file = 'excepturi';
    $request->model = 'whisper-1';
    $request->prompt = 'iure';
    $request->responseFormat = 'culpa';
    $request->temperature = 9883.74;

    $response = $sdk->openAI->createTranslation($request);

    if ($response->createTranslationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\Openai\SDK\Models\Shared\CreateTranslationRequest](../../models/shared/CreateTranslationRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


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
use \Openai\SDK\Models\Operations\DeleteFileRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new DeleteFileRequest();
    $request->fileId = 'sapiente';

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

Delete a fine-tuned model. You must have the Owner role in your organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Operations\DeleteModelRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new DeleteModelRequest();
    $request->model = 'curie:ft-acmeco-2021-03-03-21-44-20';

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

Returns the contents of the specified file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Operations\DownloadFileRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new DownloadFileRequest();
    $request->fileId = 'architecto';

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


## listFineTuneEvents

Get fine-grained status updates for a fine-tune job.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
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


## listFineTunes

List your organization's fine-tuning jobs


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;

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


## listModels

Lists the currently available models, and provides basic information about each one such as the owner and availability.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;

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


## retrieveFile

Returns information about a specific file.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Operations\RetrieveFileRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveFileRequest();
    $request->fileId = 'mollitia';

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


## retrieveFineTune

Gets info about the fine-tune job.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
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


## retrieveModel

Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Operations\RetrieveModelRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveModelRequest();
    $request->model = 'text-davinci-001';

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

