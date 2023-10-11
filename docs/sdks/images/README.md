# Images
(*images*)

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

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateImageRequest;
use \Openai\SDK\Models\Shared\CreateImageRequestResponseFormat;
use \Openai\SDK\Models\Shared\CreateImageRequestSize;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateImageRequest();
    $request->n = 1;
    $request->prompt = 'A cute baby sea otter';
    $request->responseFormat = CreateImageRequestResponseFormat::Url;
    $request->size = CreateImageRequestSize::OneThousandAndTwentyFourx1024;
    $request->user = 'user-1234';

    $response = $sdk->images->createImage($request);

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

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
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

    $response = $sdk->images->createImageEdit($request);

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

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
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

    $response = $sdk->images->createImageVariation($request);

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

