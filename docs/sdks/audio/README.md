# Audio


## Overview

Learn how to turn audio into text or text into audio.

### Available Operations

* [createSpeech](#createspeech) - Generates audio from the input text.
* [createTranscription](#createtranscription) - Transcribes audio into the input language.
* [createTranslation](#createtranslation) - Translates audio into English.

## createSpeech

Generates audio from the input text.

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
        $request = new Shared\CreateSpeechRequest();
    $request->input = '<value>';
    $request->model = '<value>';
    $request->responseFormat = Shared\CreateSpeechRequestResponseFormat::Pcm;
    $request->speed = 4589.78;
    $request->voice = Shared\Voice::Fable;;

    $response = $sdk->audio->createSpeech($request);

    if ($response->bytes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\Openai\SDK\Models\Shared\CreateSpeechRequest](../../Models/Shared/CreateSpeechRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateSpeechResponse](../../Models/Operations/CreateSpeechResponse.md)**


## createTranscription

Transcribes audio into the input language.

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
        $request = new Shared\CreateTranscriptionRequest();
    $request->file = new Shared\CreateTranscriptionRequestFile();
    $request->file->content = '0xe08fcc1Fd5';
    $request->file->fileName = 'buckinghamshire.gif';
    $request->language = '<value>';
    $request->model = 'whisper-1';
    $request->prompt = '<value>';
    $request->responseFormat = Shared\CreateTranscriptionRequestResponseFormat::VerboseJson;
    $request->temperature = 1961.3;
    $request->timestampGranularities = [
        Shared\TimestampGranularities::Segment,
    ];;

    $response = $sdk->audio->createTranscription($request);

    if ($response->oneOf !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Openai\SDK\Models\Shared\CreateTranscriptionRequest](../../Models/Shared/CreateTranscriptionRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Openai\SDK\Models\Operations\CreateTranscriptionResponse](../../Models/Operations/CreateTranscriptionResponse.md)**


## createTranslation

Translates audio into English.

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
        $request = new Shared\CreateTranslationRequest();
    $request->file = new Shared\CreateTranslationRequestFile();
    $request->file->content = '0xa45ca6c4DE';
    $request->file->fileName = 'reggae_toys_silver.gif';
    $request->model = 'whisper-1';
    $request->prompt = '<value>';
    $request->responseFormat = '<value>';
    $request->temperature = 8877.09;;

    $response = $sdk->audio->createTranslation($request);

    if ($response->oneOf !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\Openai\SDK\Models\Shared\CreateTranslationRequest](../../Models/Shared/CreateTranslationRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\Openai\SDK\Models\Operations\CreateTranslationResponse](../../Models/Operations/CreateTranslationResponse.md)**

