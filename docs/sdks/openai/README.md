# openAI

## Overview

The OpenAI REST API

### Available Operations

* [cancelFineTune](#cancelfinetune) - Immediately cancel a fine-tune job.

* [~~createAnswer~~](#createanswer) - Answers the specified question using the provided documents and examples.

The endpoint first [searches](/docs/api-reference/searches) over provided documents or files to find relevant context. The relevant context is combined with the provided examples and question to create the prompt for [completion](/docs/api-reference/completions).
 :warning: **Deprecated**
* [createChatCompletion](#createchatcompletion) - Creates a completion for the chat message
* [~~createClassification~~](#createclassification) - Classifies the specified `query` using provided examples.

The endpoint first [searches](/docs/api-reference/searches) over the labeled examples
to select the ones most relevant for the particular query. Then, the relevant examples
are combined with the query to construct a prompt to produce the final label via the
[completions](/docs/api-reference/completions) endpoint.

Labeled examples can be provided via an uploaded `file`, or explicitly listed in the
request using the `examples` parameter for quick tests and small scale use cases.
 :warning: **Deprecated**
* [createCompletion](#createcompletion) - Creates a completion for the provided prompt and parameters
* [createEdit](#createedit) - Creates a new edit for the provided input, instruction, and parameters.
* [createEmbedding](#createembedding) - Creates an embedding vector representing the input text.
* [createFile](#createfile) - Upload a file that contains document(s) to be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please contact us if you need to increase the storage limit.

* [createFineTune](#createfinetune) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

* [createImage](#createimage) - Creates an image given a prompt.
* [createImageEdit](#createimageedit) - Creates an edited or extended image given an original image and a prompt.
* [createImageVariation](#createimagevariation) - Creates a variation of a given image.
* [createModeration](#createmoderation) - Classifies if text violates OpenAI's Content Policy
* [~~createSearch~~](#createsearch) - The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.

To go beyond the 200 document limit, documents can be processed offline and then used for efficient retrieval at query time. When `file` is set, the search endpoint searches over all the documents in the given file and returns up to the `max_rerank` number of documents. These documents will be returned along with their search scores.

The similarity score is a positive score that usually ranges from 0 to 300 (but can sometimes go higher), where a score above 200 usually means the document is semantically similar to the query.
 :warning: **Deprecated**
* [createTranscription](#createtranscription) - Transcribes audio into the input language.
* [createTranslation](#createtranslation) - Translates audio into into English.
* [deleteFile](#deletefile) - Delete a file.
* [deleteModel](#deletemodel) - Delete a fine-tuned model. You must have the Owner role in your organization.
* [downloadFile](#downloadfile) - Returns the contents of the specified file
* [~~listEngines~~](#listengines) - Lists the currently available (non-finetuned) models, and provides basic information about each one such as the owner and availability. :warning: **Deprecated**
* [listFiles](#listfiles) - Returns a list of files that belong to the user's organization.
* [listFineTuneEvents](#listfinetuneevents) - Get fine-grained status updates for a fine-tune job.

* [listFineTunes](#listfinetunes) - List your organization's fine-tuning jobs

* [listModels](#listmodels) - Lists the currently available models, and provides basic information about each one such as the owner and availability.
* [~~retrieveEngine~~](#retrieveengine) - Retrieves a model instance, providing basic information about it such as the owner and availability. :warning: **Deprecated**
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


## ~~createAnswer~~

Answers the specified question using the provided documents and examples.

The endpoint first [searches](/docs/api-reference/searches) over provided documents or files to find relevant context. The relevant context is combined with the provided examples and question to create the prompt for [completion](/docs/api-reference/completions).


> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateAnswerRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateAnswerRequest();
    $request->documents = [
        'provident',
        'distinctio',
        'quibusdam',
    ];
    $request->examples = [
        [
            'corrupti',
            'illum',
            'vel',
            'error',
        ],
        [
            'suscipit',
            'iure',
            'magnam',
        ],
        [
            'ipsa',
            'delectus',
            'tempora',
            'suscipit',
        ],
    ];
    $request->examplesContext = 'Ottawa, Canada's capital, is located in the east of southern Ontario, near the city of Montréal and the U.S. border.';
    $request->expand = [
        'minus',
        'placeat',
    ];
    $request->file = 'voluptatum';
    $request->logitBias = 'iusto';
    $request->logprobs = 568045;
    $request->maxRerank = 392785;
    $request->maxTokens = 925597;
    $request->model = 'temporibus';
    $request->n = 71036;
    $request->question = 'What is the capital of Japan?';
    $request->returnMetadata = 'quis';
    $request->returnPrompt = false;
    $request->searchModel = 'veritatis';
    $request->stop = [
        '["\n"]',
    ];
    $request->temperature = 3682.41;
    $request->user = 'repellendus';

    $response = $sdk->openAI->createAnswer($request);

    if ($response->createAnswerResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\Openai\SDK\Models\Shared\CreateAnswerRequest](../../models/shared/CreateAnswerRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateAnswerResponse](../../models/operations/CreateAnswerResponse.md)**


## createChatCompletion

Creates a completion for the chat message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateChatCompletionRequest;
use \Openai\SDK\Models\Shared\CreateChatCompletionRequestLogitBias;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessage;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateChatCompletionRequest();
    $request->frequencyPenalty = 9571.56;
    $request->logitBias = new CreateChatCompletionRequestLogitBias();
    $request->maxTokens = 778157;
    $request->messages = [
        new ChatCompletionRequestMessage(),
    ];
    $request->model = 'at';
    $request->n = 1;
    $request->presencePenalty = 8700.88;
    $request->stop = [
        'quod',
        'quod',
    ];
    $request->stream = false;
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'esse';

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


## ~~createClassification~~

Classifies the specified `query` using provided examples.

The endpoint first [searches](/docs/api-reference/searches) over the labeled examples
to select the ones most relevant for the particular query. Then, the relevant examples
are combined with the query to construct a prompt to produce the final label via the
[completions](/docs/api-reference/completions) endpoint.

Labeled examples can be provided via an uploaded `file`, or explicitly listed in the
request using the `examples` parameter for quick tests and small scale use cases.


> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateClassificationRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateClassificationRequest();
    $request->examples = [
        [
            'dolorum',
            'dicta',
            'nam',
            'officia',
        ],
        [
            'fugit',
            'deleniti',
            'hic',
        ],
        [
            'totam',
            'beatae',
            'commodi',
            'molestiae',
        ],
    ];
    $request->expand = 'modi';
    $request->file = 'qui';
    $request->labels = [
        'cum',
        'esse',
        'ipsum',
        'excepturi',
    ];
    $request->logitBias = 'aspernatur';
    $request->logprobs = 'perferendis';
    $request->maxExamples = 324141;
    $request->model = 'natus';
    $request->query = 'The plot is not very attractive.';
    $request->returnMetadata = 'sed';
    $request->returnPrompt = 'iste';
    $request->searchModel = 'dolor';
    $request->temperature = 0;
    $request->user = 'natus';

    $response = $sdk->openAI->createClassification($request);

    if ($response->createClassificationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Shared\CreateClassificationRequest](../../models/shared/CreateClassificationRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateClassificationResponse](../../models/operations/CreateClassificationResponse.md)**


## createCompletion

Creates a completion for the provided prompt and parameters

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateCompletionRequest;
use \Openai\SDK\Models\Shared\CreateCompletionRequestLogitBias;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateCompletionRequest();
    $request->bestOf = 386489;
    $request->echo = false;
    $request->frequencyPenalty = 9437.49;
    $request->logitBias = new CreateCompletionRequestLogitBias();
    $request->logprobs = 902599;
    $request->maxTokens = 16;
    $request->model = 'fuga';
    $request->n = 1;
    $request->presencePenalty = 4499.5;
    $request->prompt = [
        'This is a test.',
        'This is a test.',
        'This is a test.',
    ];
    $request->stop = '
    ';
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


## createEdit

Creates a new edit for the provided input, instruction, and parameters.

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
    $request->model = 'saepe';
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
        60225,
    ];
    $request->model = 'reiciendis';
    $request->user = 'est';

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
    $request->file->content = 'mollitia';
    $request->file->file = 'laborum';
    $request->purpose = 'dolores';

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
    $request->batchSize = 210382;
    $request->classificationBetas = [
        1289.26,
        7506.86,
    ];
    $request->classificationNClasses = 315428;
    $request->classificationPositiveClass = 'omnis';
    $request->computeClassificationMetrics = false;
    $request->learningRateMultiplier = 3637.11;
    $request->model = 'minima';
    $request->nEpochs = 570197;
    $request->promptLossWeight = 384.25;
    $request->suffix = 'iure';
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
    $request->user = 'culpa';

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
    $request->image->content = 'doloribus';
    $request->image->image = 'sapiente';
    $request->mask = new CreateImageEditRequestMask();
    $request->mask->content = 'architecto';
    $request->mask->mask = 'mollitia';
    $request->n = 'dolorem';
    $request->prompt = 'A cute baby sea otter wearing a beret';
    $request->responseFormat = 'culpa';
    $request->size = 'consequuntur';
    $request->user = 'repellat';

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
    $request->image->content = 'mollitia';
    $request->image->image = 'occaecati';
    $request->n = 'numquam';
    $request->responseFormat = 'commodi';
    $request->size = 'quam';
    $request->user = 'molestiae';

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
    $request->input = 'I want to kill them.';
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


## ~~createSearch~~

The search endpoint computes similarity scores between provided query and documents. Documents can be passed directly to the API if there are no more than 200 of them.

To go beyond the 200 document limit, documents can be processed offline and then used for efficient retrieval at query time. When `file` is set, the search endpoint searches over all the documents in the given file and returns up to the `max_rerank` number of documents. These documents will be returned along with their search scores.

The similarity score is a positive score that usually ranges from 0 to 300 (but can sometimes go higher), where a score above 200 usually means the document is semantically similar to the query.


> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Operations\CreateSearchRequest;
use \Openai\SDK\Models\Shared\CreateSearchRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateSearchRequest();
    $request->createSearchRequest = new CreateSearchRequest();
    $request->createSearchRequest->documents = [
        'quia',
        'quis',
        'vitae',
    ];
    $request->createSearchRequest->file = 'laborum';
    $request->createSearchRequest->maxRerank = 656330;
    $request->createSearchRequest->query = 'the president';
    $request->createSearchRequest->returnMetadata = false;
    $request->createSearchRequest->user = 'enim';
    $request->engineId = 'davinci';

    $response = $sdk->openAI->createSearch($request);

    if ($response->createSearchResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Operations\CreateSearchRequest](../../models/operations/CreateSearchRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\CreateSearchResponse](../../models/operations/CreateSearchResponse.md)**


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
    $request->file->content = 'odit';
    $request->file->file = 'quo';
    $request->language = 'sequi';
    $request->model = 'tenetur';
    $request->prompt = 'ipsam';
    $request->responseFormat = 'id';
    $request->temperature = 8209.94;

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

Translates audio into into English.

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
    $request->file->content = 'aut';
    $request->file->file = 'quasi';
    $request->model = 'error';
    $request->prompt = 'temporibus';
    $request->responseFormat = 'laborum';
    $request->temperature = 960.98;

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
    $request->fileId = 'reiciendis';

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
    $request->fileId = 'voluptatibus';

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


## ~~listEngines~~

Lists the currently available (non-finetuned) models, and provides basic information about each one such as the owner and availability.

> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;

$sdk = Gpt::builder()
    ->build();

try {
    $response = $sdk->openAI->listEngines();

    if ($response->listEnginesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListEnginesResponse](../../models/operations/ListEnginesResponse.md)**


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


## ~~retrieveEngine~~

Retrieves a model instance, providing basic information about it such as the owner and availability.

> :warning: **DEPRECATED**: this method will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Operations\RetrieveEngineRequest;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new RetrieveEngineRequest();
    $request->engineId = 'davinci';

    $response = $sdk->openAI->retrieveEngine($request);

    if ($response->engine !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Openai\SDK\Models\Operations\RetrieveEngineRequest](../../models/operations/RetrieveEngineRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveEngineResponse](../../models/operations/RetrieveEngineResponse.md)**


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
    $request->fileId = 'vero';

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

