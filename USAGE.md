<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Openai\SDK\Gpt;
use Openai\SDK\Models\Shared\Security;
use Openai\SDK\Models\Shared\CreateTranscriptionRequest;
use Openai\SDK\Models\Shared\CreateTranscriptionRequestFile;
use Openai\SDK\Models\Shared\CreateTranscriptionRequestResponseFormat;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTranscriptionRequest();
    $request->file = new CreateTranscriptionRequestFile();
    $request->file->content = '\#BbTW\'zX9';
    $request->file->file = 'green';
    $request->language = 'Officer';
    $request->model = 'whisper-1';
    $request->prompt = 'Garden';
    $request->responseFormat = CreateTranscriptionRequestResponseFormat::VerboseJson;
    $request->temperature = 7276.26;

    $response = $sdk->audio->createTranscription($request);

    if ($response->createTranscriptionResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->