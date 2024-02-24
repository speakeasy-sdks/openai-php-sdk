# Files


## Overview

Files are used to upload documents that can be used with features like Assistants and Fine-tuning.

### Available Operations

* [createFile](#createfile) - Upload a file that can be used across various endpoints. The size of all the files uploaded by one organization can be up to 100 GB.

The size of individual files can be a maximum of 512 MB or 2 million tokens for Assistants. See the [Assistants Tools guide](/docs/assistants/tools) to learn more about the types of files supported. The Fine-tuning API only supports `.jsonl` files.

Please [contact us](https://help.openai.com/) if you need to increase these storage limits.

* [deleteFile](#deletefile) - Delete a file.
* [downloadFile](#downloadfile) - Returns the contents of the specified file.
* [listFiles](#listfiles) - Returns a list of files that belong to the user's organization.
* [retrieveFile](#retrievefile) - Returns information about a specific file.

## createFile

Upload a file that can be used across various endpoints. The size of all the files uploaded by one organization can be up to 100 GB.

The size of individual files can be a maximum of 512 MB or 2 million tokens for Assistants. See the [Assistants Tools guide](/docs/assistants/tools) to learn more about the types of files supported. The Fine-tuning API only supports `.jsonl` files.

Please [contact us](https://help.openai.com/) if you need to increase these storage limits.


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
        $request = new Shared\CreateFileRequest();
    $request->file = new Shared\File();
    $request->file->content = '0xf10df1a3b9';
    $request->file->fileName = 'rap_national.mp4v';
    $request->purpose = Shared\Purpose::FineTune;;

    $response = $sdk->files->createFile($request);

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                               | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `$request`                                                                              | [\Openai\SDK\Models\Shared\CreateFileRequest](../../Models/Shared/CreateFileRequest.md) | :heavy_check_mark:                                                                      | The request object to use for the request.                                              |


### Response

**[?\Openai\SDK\Models\Operations\CreateFileResponse](../../Models/Operations/CreateFileResponse.md)**


## deleteFile

Delete a file.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->files->deleteFile('<value>');

    if ($response->deleteFileResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                   | Type                                        | Required                                    | Description                                 |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `fileId`                                    | *string*                                    | :heavy_check_mark:                          | The ID of the file to use for this request. |


### Response

**[?\Openai\SDK\Models\Operations\DeleteFileResponse](../../Models/Operations/DeleteFileResponse.md)**


## downloadFile

Returns the contents of the specified file.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->files->downloadFile('<value>');

    if ($response->res !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                   | Type                                        | Required                                    | Description                                 |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `fileId`                                    | *string*                                    | :heavy_check_mark:                          | The ID of the file to use for this request. |


### Response

**[?\Openai\SDK\Models\Operations\DownloadFileResponse](../../Models/Operations/DownloadFileResponse.md)**


## listFiles

Returns a list of files that belong to the user's organization.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->files->listFiles('<value>');

    if ($response->listFilesResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                 | Type                                      | Required                                  | Description                               |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `purpose`                                 | *string*                                  | :heavy_minus_sign:                        | Only return files with the given purpose. |


### Response

**[?\Openai\SDK\Models\Operations\ListFilesResponse](../../Models/Operations/ListFilesResponse.md)**


## retrieveFile

Returns information about a specific file.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->files->retrieveFile('<value>');

    if ($response->openAIFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                   | Type                                        | Required                                    | Description                                 |
| ------------------------------------------- | ------------------------------------------- | ------------------------------------------- | ------------------------------------------- |
| `fileId`                                    | *string*                                    | :heavy_check_mark:                          | The ID of the file to use for this request. |


### Response

**[?\Openai\SDK\Models\Operations\RetrieveFileResponse](../../Models/Operations/RetrieveFileResponse.md)**

