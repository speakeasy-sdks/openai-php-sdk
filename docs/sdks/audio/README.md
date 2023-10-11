# Audio
(*audio*)

## Overview

Learn how to turn audio into text.

### Available Operations

* [createTranscription](#createtranscription) - Transcribes audio into the input language.
* [createTranslation](#createtranslation) - Translates audio into English.

## createTranscription

Transcribes audio into the input language.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateTranscriptionRequest;
use \Openai\SDK\Models\Shared\CreateTranscriptionRequestFile;
use \Openai\SDK\Models\Shared\CreateTranscriptionRequestResponseFormat;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTranscriptionRequest();
    $request->file = new CreateTranscriptionRequestFile();
    $request->file->content = '\#BbTW\'zX9';
    $request->file->file = 'Buckinghamshire';
    $request->language = 'teal Titanium';
    $request->model = 'whisper-1';
    $request->prompt = 'Configuration invoice';
    $request->responseFormat = CreateTranscriptionRequestResponseFormat::Text;
    $request->temperature = 1473.99;

    $response = $sdk->audio->createTranscription($request);

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
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateTranslationRequest;
use \Openai\SDK\Models\Shared\CreateTranslationRequestFile;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTranslationRequest();
    $request->file = new CreateTranslationRequestFile();
    $request->file->content = 'M57UL;W3rx';
    $request->file->file = 'Reggae Toys silver';
    $request->model = 'whisper-1';
    $request->prompt = 'foolishly Diesel';
    $request->responseFormat = 'Frozen Passenger';
    $request->temperature = 4850.17;

    $response = $sdk->audio->createTranslation($request);

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

