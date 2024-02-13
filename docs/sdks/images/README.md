# Images


## Overview

Given a prompt and/or an input image, the model will generate a new image.

### Available Operations

* [createImage](#createimage) - Creates an image given a prompt.
* [createImageEdit](#createimageedit) - Creates an edited or extended image given an original image and a prompt.
* [createImageVariation](#createimagevariation) - Creates a variation of a given image.

## createImage

Creates an image given a prompt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateImageRequest();
    $request->model = 'dall-e-3';
    $request->n = 1;
    $request->prompt = 'A cute baby sea otter';
    $request->quality = Shared\Quality::Standard;
    $request->responseFormat = Shared\CreateImageRequestResponseFormat::Url;
    $request->size = Shared\CreateImageRequestSize::OneThousandAndTwentyFourx1024;
    $request->style = Shared\Style::Vivid;
    $request->user = 'user-1234';;

    $response = $sdk->images->createImage($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `$request`                                                                                | [\Openai\SDK\Models\Shared\CreateImageRequest](../../Models/Shared/CreateImageRequest.md) | :heavy_check_mark:                                                                        | The request object to use for the request.                                                |


### Response

**[?\Openai\SDK\Models\Operations\CreateImageResponse](../../Models/Operations/CreateImageResponse.md)**


## createImageEdit

Creates an edited or extended image given an original image and a prompt.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateImageEditRequest();
    $request->image = new Shared\CreateImageEditRequestImage();
    $request->image->content = '0x3e31F4cec5';
    $request->image->fileName = 'facilitator_gosh_hatchback.mpe';
    $request->mask = new Shared\Mask();
    $request->mask->content = '0xFC5456e4eC';
    $request->mask->fileName = 'electric_cambridgeshire.jpeg';
    $request->model = 'dall-e-2';
    $request->n = 1;
    $request->prompt = 'A cute baby sea otter wearing a beret';
    $request->responseFormat = Shared\CreateImageEditRequestResponseFormat::Url;
    $request->size = Shared\Size::OneThousandAndTwentyFourx1024;
    $request->user = 'user-1234';;

    $response = $sdk->images->createImageEdit($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\Openai\SDK\Models\Shared\CreateImageEditRequest](../../Models/Shared/CreateImageEditRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CreateImageEditResponse](../../Models/Operations/CreateImageEditResponse.md)**


## createImageVariation

Creates a variation of a given image.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateImageVariationRequest();
    $request->image = new Shared\CreateImageVariationRequestImage();
    $request->image->content = '0xfdd5b8DcDa';
    $request->image->fileName = 'fantastic.gif';
    $request->model = 'dall-e-2';
    $request->n = 1;
    $request->responseFormat = Shared\CreateImageVariationRequestResponseFormat::Url;
    $request->size = Shared\CreateImageVariationRequestSize::OneThousandAndTwentyFourx1024;
    $request->user = 'user-1234';;

    $response = $sdk->images->createImageVariation($request);

    if ($response->imagesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Shared\CreateImageVariationRequest](../../Models/Shared/CreateImageVariationRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateImageVariationResponse](../../Models/Operations/CreateImageVariationResponse.md)**

