# OpenAPI PHP SDK

![OpenAI_Logo_Black](https://user-images.githubusercontent.com/6267663/220744241-48f469af-40b6-4d7f-ab48-8426b30189f0.svg#gh-light-mode-only)
![OpenAI_Logo_White](https://user-images.githubusercontent.com/6267663/220744513-66c99d0e-ed91-4577-982f-e7128d35ce95.svg#gh-dark-mode-only)

<div align="center">
   <p><strong>This is an unofficial SDK for the OpenAI API.</strong>  The OpenAI API can be applied to virtually any task that involves understanding or generating natural language or code. We offer a spectrum of models with different levels of power suitable for different tasks, as well as the ability to fine-tune your own custom models. These models can be used for everything from content generation to semantic search and classification.</p>
   <a href="https://github.com/speakeasy-sdks/openai-php-sdk/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/openai-php-sdk/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
   <a href="https://platform.openai.com/docs/introduction"><img src="https://img.shields.io/static/v1?label=Docs&message=API Ref&color=2ca47c&style=for-the-badge" /></a>
</div> 

<!-- Start SDK Installation -->
## SDK Installation

### Composer

```bash
composer require "speakeasy-sdks/openai-php-sdk"
```
<!-- End SDK Installation -->

## Authentication

The OpenAI API uses API keys for authentication. Visit your API Keys page to retrieve the API key you'll use in your requests.

**Remember that your API key is a secret!** Do not share it with others or expose it in any client-side code (browsers, apps). Production requests must be routed through your own backend server where your API key can be securely loaded from an environment variable or key management service.

All API requests should include your API key in an Authorization HTTP header as follows:

```bash
Authorization: Bearer YOUR_API_KEY
```

## SDK Example Usage
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
``````php
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
``````php
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
``````php
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
``````php
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
``````php
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
``````php
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
``````php
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
``````php
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
```<!-- Start SDK Example Usage -->

<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [openAI](docs/sdks/openai/README.md)

* [cancelFineTune](docs/sdks/openai/README.md#cancelfinetune) - Immediately cancel a fine-tune job.

* [createChatCompletion](docs/sdks/openai/README.md#createchatcompletion) - Creates a model response for the given chat conversation.
* [createCompletion](docs/sdks/openai/README.md#createcompletion) - Creates a completion for the provided prompt and parameters.
* [createEdit](docs/sdks/openai/README.md#createedit) - Creates a new edit for the provided input, instruction, and parameters.
* [createEmbedding](docs/sdks/openai/README.md#createembedding) - Creates an embedding vector representing the input text.
* [createFile](docs/sdks/openai/README.md#createfile) - Upload a file that contains document(s) to be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please contact us if you need to increase the storage limit.

* [createFineTune](docs/sdks/openai/README.md#createfinetune) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

* [createImage](docs/sdks/openai/README.md#createimage) - Creates an image given a prompt.
* [createImageEdit](docs/sdks/openai/README.md#createimageedit) - Creates an edited or extended image given an original image and a prompt.
* [createImageVariation](docs/sdks/openai/README.md#createimagevariation) - Creates a variation of a given image.
* [createModeration](docs/sdks/openai/README.md#createmoderation) - Classifies if text violates OpenAI's Content Policy
* [createTranscription](docs/sdks/openai/README.md#createtranscription) - Transcribes audio into the input language.
* [createTranslation](docs/sdks/openai/README.md#createtranslation) - Translates audio into English.
* [deleteFile](docs/sdks/openai/README.md#deletefile) - Delete a file.
* [deleteModel](docs/sdks/openai/README.md#deletemodel) - Delete a fine-tuned model. You must have the Owner role in your organization.
* [downloadFile](docs/sdks/openai/README.md#downloadfile) - Returns the contents of the specified file
* [listFiles](docs/sdks/openai/README.md#listfiles) - Returns a list of files that belong to the user's organization.
* [listFineTuneEvents](docs/sdks/openai/README.md#listfinetuneevents) - Get fine-grained status updates for a fine-tune job.

* [listFineTunes](docs/sdks/openai/README.md#listfinetunes) - List your organization's fine-tuning jobs

* [listModels](docs/sdks/openai/README.md#listmodels) - Lists the currently available models, and provides basic information about each one such as the owner and availability.
* [retrieveFile](docs/sdks/openai/README.md#retrievefile) - Returns information about a specific file.
* [retrieveFineTune](docs/sdks/openai/README.md#retrievefinetune) - Gets info about the fine-tune job.

[Learn more about Fine-tuning](/docs/guides/fine-tuning)

* [retrieveModel](docs/sdks/openai/README.md#retrievemodel) - Retrieves a model instance, providing basic information about the model such as the owner and permissioning.
<!-- End SDK Available Operations -->

### SDK Generated by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
