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

## createChatCompletion

Creates a completion for the chat message

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\CreateChatCompletionRequest;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessage;
use \Openai\SDK\Models\Shared\ChatCompletionRequestMessageRole;

$sdk = Gpt::builder()
    ->build();

try {
    $request = new CreateChatCompletionRequest();
    $request->frequencyPenalty = 9571.56;
    $request->logitBias = [
        'odit' => 'at',
        'at' => 'maiores',
        'molestiae' => 'quod',
        'quod' => 'esse',
    ];
    $request->maxTokens = 520478;
    $request->messages = [
        new ChatCompletionRequestMessage(),
        new ChatCompletionRequestMessage(),
        new ChatCompletionRequestMessage(),
        new ChatCompletionRequestMessage(),
    ];
    $request->model = 'dolorum';
    $request->n = 1;
    $request->presencePenalty = 1182.74;
    $request->stop = [
        'occaecati',
        'fugit',
        'deleniti',
    ];
    $request->stream = false;
    $request->temperature = 1;
    $request->topP = 1;
    $request->user = 'hic';

    $response = $sdk->openAI->createChatCompletion($request);

    if ($response->createChatCompletionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
            'beatae',
            'commodi',
            'molestiae',
        ],
        [
            'qui',
            'impedit',
        ],
        [
            'esse',
            'ipsum',
            'excepturi',
        ],
        [
            'perferendis',
        ],
    ];
    $request->expand = 'ad';
    $request->file = 'natus';
    $request->labels = [
        'iste',
    ];
    $request->logitBias = 'dolor';
    $request->logprobs = 'natus';
    $request->maxExamples = 386489;
    $request->model = 'hic';
    $request->query = 'The plot is not very attractive.';
    $request->returnMetadata = 'saepe';
    $request->returnPrompt = 'fuga';
    $request->searchModel = 'in';
    $request->temperature = 3595.08;
    $request->user = 'iste';

    $response = $sdk->openAI->createClassification($request);

    if ($response->createClassificationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## createCompletion

Creates a completion for the provided prompt and parameters

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
    $request->bestOf = 437032;
    $request->echo = false;
    $request->frequencyPenalty = 9023.49;
    $request->logitBias = [
        'architecto' => 'ipsa',
        'reiciendis' => 'est',
        'mollitia' => 'laborum',
    ];
    $request->logprobs = 170909;
    $request->maxTokens = 16;
    $request->model = 'dolorem';
    $request->n = 1;
    $request->presencePenalty = 3581.52;
    $request->prompt = 'This is a test.';
    $request->stop = [
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
    $request->model = 'omnis';
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
        'This is a test.',
        'This is a test.',
    ];
    $request->model = 'excepturi';
    $request->user = 'accusantium';

    $response = $sdk->openAI->createEmbedding($request);

    if ($response->createEmbeddingResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->file->content = 'iure';
    $request->file->file = 'culpa';
    $request->purpose = 'doloribus';

    $response = $sdk->openAI->createFile($request);

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->batchSize = 958950;
    $request->classificationBetas = [
        6527.9,
    ];
    $request->classificationNClasses = 208876;
    $request->classificationPositiveClass = 'culpa';
    $request->computeClassificationMetrics = false;
    $request->learningRateMultiplier = 1613.09;
    $request->model = 'repellat';
    $request->nEpochs = 653108;
    $request->promptLossWeight = 5818.5;
    $request->suffix = 'numquam';
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
    $request->responseFormat = CreateImageRequestResponseFormat::URL;
    $request->size = CreateImageRequestSize::ONE_THOUSAND_AND_TWENTY_FOURX1024;
    $request->user = 'commodi';

    $response = $sdk->openAI->createImage($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->image->content = 'quam';
    $request->image->image = 'molestiae';
    $request->mask = new CreateImageEditRequestMask();
    $request->mask->content = 'velit';
    $request->mask->mask = 'error';
    $request->n = 'quia';
    $request->prompt = 'A cute baby sea otter wearing a beret';
    $request->responseFormat = 'quis';
    $request->size = 'vitae';
    $request->user = 'laborum';

    $response = $sdk->openAI->createImageEdit($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->image->content = 'animi';
    $request->image->image = 'enim';
    $request->n = 'odit';
    $request->responseFormat = 'quo';
    $request->size = 'sequi';
    $request->user = 'tenetur';

    $response = $sdk->openAI->createImageVariation($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
        'possimus',
        'aut',
        'quasi',
    ];
    $request->createSearchRequest->file = 'error';
    $request->createSearchRequest->maxRerank = 837945;
    $request->createSearchRequest->query = 'the president';
    $request->createSearchRequest->returnMetadata = false;
    $request->createSearchRequest->user = 'laborum';
    $request->engineId = 'davinci';

    $response = $sdk->openAI->createSearch($request);

    if ($response->createSearchResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->file->content = 'quasi';
    $request->file->file = 'reiciendis';
    $request->language = 'voluptatibus';
    $request->model = 'vero';
    $request->prompt = 'nihil';
    $request->responseFormat = 'praesentium';
    $request->temperature = 9767.62;

    $response = $sdk->openAI->createTranscription($request);

    if ($response->createTranscriptionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->file->content = 'ipsa';
    $request->file->file = 'omnis';
    $request->model = 'voluptate';
    $request->prompt = 'cum';
    $request->responseFormat = 'perferendis';
    $request->temperature = 391.87;

    $response = $sdk->openAI->createTranslation($request);

    if ($response->createTranslationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->fileId = 'reprehenderit';

    $response = $sdk->openAI->deleteFile($request);

    if ($response->deleteFileResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->fileId = 'ut';

    $response = $sdk->openAI->downloadFile($request);

    if ($response->downloadFile200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
    $request->fileId = 'maiores';

    $response = $sdk->openAI->retrieveFile($request);

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

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
