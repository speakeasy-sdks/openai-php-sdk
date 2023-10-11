# Files
(*files*)

## Overview

Files are used to upload documents that can be used with features like fine-tuning.

### Available Operations

* [createFile](#createfile) - Upload a file that can be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please [contact us](https://help.openai.com/) if you need to increase the storage limit.

* [deleteFile](#deletefile) - Delete a file.
* [downloadFile](#downloadfile) - Returns the contents of the specified file.
* [listFiles](#listfiles) - Returns a list of files that belong to the user's organization.
* [retrieveFile](#retrievefile) - Returns information about a specific file.

## createFile

Upload a file that can be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please [contact us](https://help.openai.com/) if you need to increase the storage limit.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
use \Openai\SDK\Models\Shared\CreateFileRequest;
use \Openai\SDK\Models\Shared\CreateFileRequestFile;

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateFileRequest();
    $request->file = new CreateFileRequestFile();
    $request->file->content = '`\'$Z`(L/RH';
    $request->file->file = 'Rap National';
    $request->purpose = 'Female synergistic Maine';

    $response = $sdk->files->createFile($request);

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

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteFileRequest();
    $request->fileId = 'yellow kiddingly white';

    $response = $sdk->files->deleteFile($request);

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

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DownloadFileRequest();
    $request->fileId = 'Maserati Bronze Audi';

    $response = $sdk->files->downloadFile($request);

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

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->files->listFiles();

    if ($response->listFilesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Openai\SDK\Models\Operations\ListFilesResponse](../../models/operations/ListFilesResponse.md)**


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

$security = new Security();
$security->apiKeyAuth = '';

$sdk = Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RetrieveFileRequest();
    $request->fileId = 'online Facilitator enfold';

    $response = $sdk->files->retrieveFile($request);

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

