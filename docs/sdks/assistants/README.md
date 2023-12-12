# Assistants


## Overview

Build Assistants that can call models and use tools.

### Available Operations

* [cancelRun](#cancelrun) - Cancels a run that is `in_progress`.
* [createAssistant](#createassistant) - Create an assistant with a model and instructions.
* [createAssistantFile](#createassistantfile) - Create an assistant file by attaching a [File](/docs/api-reference/files) to an [assistant](/docs/api-reference/assistants).
* [createMessage](#createmessage) - Create a message.
* [createRun](#createrun) - Create a run.
* [createThread](#createthread) - Create a thread.
* [createThreadAndRun](#createthreadandrun) - Create a thread and run it in one request.
* [deleteAssistant](#deleteassistant) - Delete an assistant.
* [deleteAssistantFile](#deleteassistantfile) - Delete an assistant file.
* [deleteThread](#deletethread) - Delete a thread.
* [getAssistant](#getassistant) - Retrieves an assistant.
* [getAssistantFile](#getassistantfile) - Retrieves an AssistantFile.
* [getMessage](#getmessage) - Retrieve a message.
* [getMessageFile](#getmessagefile) - Retrieves a message file.
* [getRun](#getrun) - Retrieves a run.
* [getRunStep](#getrunstep) - Retrieves a run step.
* [getThread](#getthread) - Retrieves a thread.
* [listAssistantFiles](#listassistantfiles) - Returns a list of assistant files.
* [listAssistants](#listassistants) - Returns a list of assistants.
* [listMessageFiles](#listmessagefiles) - Returns a list of message files.
* [listMessages](#listmessages) - Returns a list of messages for a given thread.
* [listRunSteps](#listrunsteps) - Returns a list of run steps belonging to a run.
* [listRuns](#listruns) - Returns a list of runs belonging to a thread.
* [modifyAssistant](#modifyassistant) - Modifies an assistant.
* [modifyMessage](#modifymessage) - Modifies a message.
* [modifyRun](#modifyrun) - Modifies a run.
* [modifyThread](#modifythread) - Modifies a thread.
* [submitToolOuputsToRun](#submittoolouputstorun) - When a run has the `status: "requires_action"` and `required_action.type` is `submit_tool_outputs`, this endpoint can be used to submit the outputs from the tool calls once they're all completed. All outputs must be submitted in a single request.


## cancelRun

Cancels a run that is `in_progress`.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->cancelRun('string', 'string');

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                       | Type                                            | Required                                        | Description                                     |
| ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- | ----------------------------------------------- |
| `runId`                                         | *string*                                        | :heavy_check_mark:                              | The ID of the run to cancel.                    |
| `threadId`                                      | *string*                                        | :heavy_check_mark:                              | The ID of the thread to which this run belongs. |


### Response

**[?\Openai\SDK\Models\Operations\CancelRunResponse](../../Models/Operations/CancelRunResponse.md)**


## createAssistant

Create an assistant with a model and instructions.

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
        $request = new Shared\CreateAssistantRequest();
    $request->description = 'Fundamental homogeneous functionalities';
    $request->fileIds = [
        'string',
    ];
    $request->instructions = 'string';
    $request->metadata = new Shared\CreateAssistantRequestMetadata();
    $request->model = 'Civic';
    $request->name = 'string';
    $request->tools = [
        'string',
    ];;

    $response = $sdk->assistants->createAssistant($request);

    if ($response->assistantObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `$request`                                                                                        | [\Openai\SDK\Models\Shared\CreateAssistantRequest](../../Models/Shared/CreateAssistantRequest.md) | :heavy_check_mark:                                                                                | The request object to use for the request.                                                        |


### Response

**[?\Openai\SDK\Models\Operations\CreateAssistantResponse](../../Models/Operations/CreateAssistantResponse.md)**


## createAssistantFile

Create an assistant file by attaching a [File](/docs/api-reference/files) to an [assistant](/docs/api-reference/assistants).

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $createAssistantFileRequest = new Shared\CreateAssistantFileRequest();
    $createAssistantFileRequest->fileId = 'string';

    $response = $sdk->assistants->createAssistantFile($createAssistantFileRequest, 'file-abc123');

    if ($response->assistantFileObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               | Example                                                                                                   |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `createAssistantFileRequest`                                                                              | [\Openai\SDK\Models\Shared\CreateAssistantFileRequest](../../Models/Shared/CreateAssistantFileRequest.md) | :heavy_check_mark:                                                                                        | N/A                                                                                                       |                                                                                                           |
| `assistantId`                                                                                             | *string*                                                                                                  | :heavy_check_mark:                                                                                        | The ID of the assistant for which to create a File.<br/>                                                  | file-abc123                                                                                               |


### Response

**[?\Openai\SDK\Models\Operations\CreateAssistantFileResponse](../../Models/Operations/CreateAssistantFileResponse.md)**


## createMessage

Create a message.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $createMessageRequest = new Shared\CreateMessageRequest();
    $createMessageRequest->content = 'string';
    $createMessageRequest->fileIds = [
        'string',
    ];
    $createMessageRequest->metadata = new Shared\CreateMessageRequestMetadata();
    $createMessageRequest->role = Shared\CreateMessageRequestRole::User;

    $response = $sdk->assistants->createMessage($createMessageRequest, 'string');

    if ($response->messageObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `createMessageRequest`                                                                        | [\Openai\SDK\Models\Shared\CreateMessageRequest](../../Models/Shared/CreateMessageRequest.md) | :heavy_check_mark:                                                                            | N/A                                                                                           |
| `threadId`                                                                                    | *string*                                                                                      | :heavy_check_mark:                                                                            | The ID of the [thread](/docs/api-reference/threads) to create a message for.                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateMessageResponse](../../Models/Operations/CreateMessageResponse.md)**


## createRun

Create a run.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $createRunRequest = new Shared\CreateRunRequest();
    $createRunRequest->assistantId = 'string';
    $createRunRequest->instructions = 'string';
    $createRunRequest->metadata = new Shared\CreateRunRequestMetadata();
    $createRunRequest->model = 'F-150';
    $createRunRequest->tools = [
        'string',
    ];

    $response = $sdk->assistants->createRun($createRunRequest, 'string');

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                             | Type                                                                                  | Required                                                                              | Description                                                                           |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| `createRunRequest`                                                                    | [\Openai\SDK\Models\Shared\CreateRunRequest](../../Models/Shared/CreateRunRequest.md) | :heavy_check_mark:                                                                    | N/A                                                                                   |
| `threadId`                                                                            | *string*                                                                              | :heavy_check_mark:                                                                    | The ID of the thread to run.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\CreateRunResponse](../../Models/Operations/CreateRunResponse.md)**


## createThread

Create a thread.

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
        $request = new Shared\CreateThreadRequest();
    $request->messages = [
        new Shared\CreateMessageRequest(),
    ];
    $request->metadata = new Shared\CreateThreadRequestMetadata();;

    $response = $sdk->assistants->createThread($request);

    if ($response->threadObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\Openai\SDK\Models\Shared\CreateThreadRequest](../../Models/Shared/CreateThreadRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\Openai\SDK\Models\Operations\CreateThreadResponse](../../Models/Operations/CreateThreadResponse.md)**


## createThreadAndRun

Create a thread and run it in one request.

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
        $request = new Shared\CreateThreadAndRunRequest();
    $request->assistantId = 'string';
    $request->instructions = 'string';
    $request->metadata = new Shared\CreateThreadAndRunRequestMetadata();
    $request->model = 'Beetle';
    $request->thread = new Shared\CreateThreadRequest();
    $request->thread->messages = [
        new Shared\CreateMessageRequest(),
    ];
    $request->thread->metadata = new Shared\CreateThreadRequestMetadata();
    $request->tools = [
        'string',
    ];;

    $response = $sdk->assistants->createThreadAndRun($request);

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Openai\SDK\Models\Shared\CreateThreadAndRunRequest](../../Models/Shared/CreateThreadAndRunRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Openai\SDK\Models\Operations\CreateThreadAndRunResponse](../../Models/Operations/CreateThreadAndRunResponse.md)**


## deleteAssistant

Delete an assistant.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->deleteAssistant('string');

    if ($response->deleteAssistantResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                          | Type                               | Required                           | Description                        |
| ---------------------------------- | ---------------------------------- | ---------------------------------- | ---------------------------------- |
| `assistantId`                      | *string*                           | :heavy_check_mark:                 | The ID of the assistant to delete. |


### Response

**[?\Openai\SDK\Models\Operations\DeleteAssistantResponse](../../Models/Operations/DeleteAssistantResponse.md)**


## deleteAssistantFile

Delete an assistant file.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->deleteAssistantFile('string', 'string');

    if ($response->deleteAssistantFileResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                         | Type                                              | Required                                          | Description                                       |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| `assistantId`                                     | *string*                                          | :heavy_check_mark:                                | The ID of the assistant that the file belongs to. |
| `fileId`                                          | *string*                                          | :heavy_check_mark:                                | The ID of the file to delete.                     |


### Response

**[?\Openai\SDK\Models\Operations\DeleteAssistantFileResponse](../../Models/Operations/DeleteAssistantFileResponse.md)**


## deleteThread

Delete a thread.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->deleteThread('string');

    if ($response->deleteThreadResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                       | Type                            | Required                        | Description                     |
| ------------------------------- | ------------------------------- | ------------------------------- | ------------------------------- |
| `threadId`                      | *string*                        | :heavy_check_mark:              | The ID of the thread to delete. |


### Response

**[?\Openai\SDK\Models\Operations\DeleteThreadResponse](../../Models/Operations/DeleteThreadResponse.md)**


## getAssistant

Retrieves an assistant.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getAssistant('string');

    if ($response->assistantObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `assistantId`                        | *string*                             | :heavy_check_mark:                   | The ID of the assistant to retrieve. |


### Response

**[?\Openai\SDK\Models\Operations\GetAssistantResponse](../../Models/Operations/GetAssistantResponse.md)**


## getAssistantFile

Retrieves an AssistantFile.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getAssistantFile('string', 'string');

    if ($response->assistantFileObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                        | Type                                             | Required                                         | Description                                      |
| ------------------------------------------------ | ------------------------------------------------ | ------------------------------------------------ | ------------------------------------------------ |
| `assistantId`                                    | *string*                                         | :heavy_check_mark:                               | The ID of the assistant who the file belongs to. |
| `fileId`                                         | *string*                                         | :heavy_check_mark:                               | The ID of the file we're getting.                |


### Response

**[?\Openai\SDK\Models\Operations\GetAssistantFileResponse](../../Models/Operations/GetAssistantFileResponse.md)**


## getMessage

Retrieve a message.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getMessage('string', 'string');

    if ($response->messageObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `messageId`                                                                        | *string*                                                                           | :heavy_check_mark:                                                                 | The ID of the message to retrieve.                                                 |
| `threadId`                                                                         | *string*                                                                           | :heavy_check_mark:                                                                 | The ID of the [thread](/docs/api-reference/threads) to which this message belongs. |


### Response

**[?\Openai\SDK\Models\Operations\GetMessageResponse](../../Models/Operations/GetMessageResponse.md)**


## getMessageFile

Retrieves a message file.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getMessageFile('file-abc123', 'msg_abc123', 'thread_abc123');

    if ($response->messageFileObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                | Example                                                    |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `fileId`                                                   | *string*                                                   | :heavy_check_mark:                                         | The ID of the file being retrieved.                        | file-abc123                                                |
| `messageId`                                                | *string*                                                   | :heavy_check_mark:                                         | The ID of the message the file belongs to.                 | msg_abc123                                                 |
| `threadId`                                                 | *string*                                                   | :heavy_check_mark:                                         | The ID of the thread to which the message and File belong. | thread_abc123                                              |


### Response

**[?\Openai\SDK\Models\Operations\GetMessageFileResponse](../../Models/Operations/GetMessageFileResponse.md)**


## getRun

Retrieves a run.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getRun('string', 'string');

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                         | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `runId`                                                           | *string*                                                          | :heavy_check_mark:                                                | The ID of the run to retrieve.                                    |
| `threadId`                                                        | *string*                                                          | :heavy_check_mark:                                                | The ID of the [thread](/docs/api-reference/threads) that was run. |


### Response

**[?\Openai\SDK\Models\Operations\GetRunResponse](../../Models/Operations/GetRunResponse.md)**


## getRunStep

Retrieves a run step.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getRunStep('string', 'string', 'string');

    if ($response->runStepObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `runId`                                                     | *string*                                                    | :heavy_check_mark:                                          | The ID of the run to which the run step belongs.            |
| `stepId`                                                    | *string*                                                    | :heavy_check_mark:                                          | The ID of the run step to retrieve.                         |
| `threadId`                                                  | *string*                                                    | :heavy_check_mark:                                          | The ID of the thread to which the run and run step belongs. |


### Response

**[?\Openai\SDK\Models\Operations\GetRunStepResponse](../../Models/Operations/GetRunStepResponse.md)**


## getThread

Retrieves a thread.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->getThread('string');

    if ($response->threadObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `threadId`                        | *string*                          | :heavy_check_mark:                | The ID of the thread to retrieve. |


### Response

**[?\Openai\SDK\Models\Operations\GetThreadResponse](../../Models/Operations/GetThreadResponse.md)**


## listAssistantFiles

Returns a list of assistant files.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAssistantFilesRequest();
    $request->after = 'string';
    $request->assistantId = 'string';
    $request->before = 'string';
    $request->limit = 57116;
    $request->order = Operations\Order::Asc;;

    $response = $sdk->assistants->listAssistantFiles($request);

    if ($response->listAssistantFilesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Openai\SDK\Models\Operations\ListAssistantFilesRequest](../../Models/Operations/ListAssistantFilesRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Openai\SDK\Models\Operations\ListAssistantFilesResponse](../../Models/Operations/ListAssistantFilesResponse.md)**


## listAssistants

Returns a list of assistants.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->assistants->listAssistants('string', 'string', 948776, Operations\QueryParamOrder::Asc);

    if ($response->listAssistantsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `after`                                                                                                                                                                                                                                                                                | *string*                                                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                                     | A cursor for use in pagination. `after` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include after=obj_foo in order to fetch the next page of the list.<br/>   |
| `before`                                                                                                                                                                                                                                                                               | *string*                                                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                                     | A cursor for use in pagination. `before` is an object ID that defines your place in the list. For instance, if you make a list request and receive 100 objects, ending with obj_foo, your subsequent call can include before=obj_foo in order to fetch the previous page of the list.<br/> |
| `limit`                                                                                                                                                                                                                                                                                | *int*                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                     | A limit on the number of objects to be returned. Limit can range between 1 and 100, and the default is 20.<br/>                                                                                                                                                                        |
| `order`                                                                                                                                                                                                                                                                                | [\Openai\SDK\Models\Operations\QueryParamOrder](../../Models/Operations/QueryParamOrder.md)                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                                                                                     | Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.<br/>                                                                                                                                                               |


### Response

**[?\Openai\SDK\Models\Operations\ListAssistantsResponse](../../Models/Operations/ListAssistantsResponse.md)**


## listMessageFiles

Returns a list of message files.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListMessageFilesRequest();
    $request->after = 'string';
    $request->before = 'string';
    $request->limit = 60284;
    $request->messageId = 'string';
    $request->order = Operations\ListMessageFilesQueryParamOrder::Asc;
    $request->threadId = 'string';;

    $response = $sdk->assistants->listMessageFiles($request);

    if ($response->listMessageFilesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Openai\SDK\Models\Operations\ListMessageFilesRequest](../../Models/Operations/ListMessageFilesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Openai\SDK\Models\Operations\ListMessageFilesResponse](../../Models/Operations/ListMessageFilesResponse.md)**


## listMessages

Returns a list of messages for a given thread.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListMessagesRequest();
    $request->after = 'string';
    $request->before = 'string';
    $request->limit = 179958;
    $request->order = Operations\ListMessagesQueryParamOrder::Asc;
    $request->threadId = 'string';;

    $response = $sdk->assistants->listMessages($request);

    if ($response->listMessagesResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Operations\ListMessagesRequest](../../Models/Operations/ListMessagesRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\ListMessagesResponse](../../Models/Operations/ListMessagesResponse.md)**


## listRunSteps

Returns a list of run steps belonging to a run.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListRunStepsRequest();
    $request->after = 'string';
    $request->before = 'string';
    $request->limit = 775652;
    $request->order = Operations\ListRunStepsQueryParamOrder::Asc;
    $request->runId = 'string';
    $request->threadId = 'string';;

    $response = $sdk->assistants->listRunSteps($request);

    if ($response->listRunStepsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                           | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `$request`                                                                                          | [\Openai\SDK\Models\Operations\ListRunStepsRequest](../../Models/Operations/ListRunStepsRequest.md) | :heavy_check_mark:                                                                                  | The request object to use for the request.                                                          |


### Response

**[?\Openai\SDK\Models\Operations\ListRunStepsResponse](../../Models/Operations/ListRunStepsResponse.md)**


## listRuns

Returns a list of runs belonging to a thread.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListRunsRequest();
    $request->after = 'string';
    $request->before = 'string';
    $request->limit = 364964;
    $request->order = Operations\ListRunsQueryParamOrder::Asc;
    $request->threadId = 'string';;

    $response = $sdk->assistants->listRuns($request);

    if ($response->listRunsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\Openai\SDK\Models\Operations\ListRunsRequest](../../Models/Operations/ListRunsRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\Openai\SDK\Models\Operations\ListRunsResponse](../../Models/Operations/ListRunsResponse.md)**


## modifyAssistant

Modifies an assistant.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $modifyAssistantRequest = new Shared\ModifyAssistantRequest();
    $modifyAssistantRequest->description = 'Assimilated client-driven forecast';
    $modifyAssistantRequest->fileIds = [
        'string',
    ];
    $modifyAssistantRequest->instructions = 'string';
    $modifyAssistantRequest->metadata = new Shared\ModifyAssistantRequestMetadata();
    $modifyAssistantRequest->model = 'Aventador';
    $modifyAssistantRequest->name = 'string';
    $modifyAssistantRequest->tools = [
        'string',
    ];

    $response = $sdk->assistants->modifyAssistant($modifyAssistantRequest, 'string');

    if ($response->assistantObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `modifyAssistantRequest`                                                                          | [\Openai\SDK\Models\Shared\ModifyAssistantRequest](../../Models/Shared/ModifyAssistantRequest.md) | :heavy_check_mark:                                                                                | N/A                                                                                               |
| `assistantId`                                                                                     | *string*                                                                                          | :heavy_check_mark:                                                                                | The ID of the assistant to modify.                                                                |


### Response

**[?\Openai\SDK\Models\Operations\ModifyAssistantResponse](../../Models/Operations/ModifyAssistantResponse.md)**


## modifyMessage

Modifies a message.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $modifyMessageRequest = new Shared\ModifyMessageRequest();
    $modifyMessageRequest->metadata = new Shared\ModifyMessageRequestMetadata();

    $response = $sdk->assistants->modifyMessage($modifyMessageRequest, 'string', 'string');

    if ($response->messageObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `modifyMessageRequest`                                                                        | [\Openai\SDK\Models\Shared\ModifyMessageRequest](../../Models/Shared/ModifyMessageRequest.md) | :heavy_check_mark:                                                                            | N/A                                                                                           |
| `messageId`                                                                                   | *string*                                                                                      | :heavy_check_mark:                                                                            | The ID of the message to modify.                                                              |
| `threadId`                                                                                    | *string*                                                                                      | :heavy_check_mark:                                                                            | The ID of the thread to which this message belongs.                                           |


### Response

**[?\Openai\SDK\Models\Operations\ModifyMessageResponse](../../Models/Operations/ModifyMessageResponse.md)**


## modifyRun

Modifies a run.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $modifyRunRequest = new Shared\ModifyRunRequest();
    $modifyRunRequest->metadata = new Shared\ModifyRunRequestMetadata();

    $response = $sdk->assistants->modifyRun($modifyRunRequest, 'string', 'string');

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                             | Type                                                                                  | Required                                                                              | Description                                                                           |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| `modifyRunRequest`                                                                    | [\Openai\SDK\Models\Shared\ModifyRunRequest](../../Models/Shared/ModifyRunRequest.md) | :heavy_check_mark:                                                                    | N/A                                                                                   |
| `runId`                                                                               | *string*                                                                              | :heavy_check_mark:                                                                    | The ID of the run to modify.                                                          |
| `threadId`                                                                            | *string*                                                                              | :heavy_check_mark:                                                                    | The ID of the [thread](/docs/api-reference/threads) that was run.                     |


### Response

**[?\Openai\SDK\Models\Operations\ModifyRunResponse](../../Models/Operations/ModifyRunResponse.md)**


## modifyThread

Modifies a thread.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $modifyThreadRequest = new Shared\ModifyThreadRequest();
    $modifyThreadRequest->metadata = new Shared\ModifyThreadRequestMetadata();

    $response = $sdk->assistants->modifyThread($modifyThreadRequest, 'string');

    if ($response->threadObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `modifyThreadRequest`                                                                       | [\Openai\SDK\Models\Shared\ModifyThreadRequest](../../Models/Shared/ModifyThreadRequest.md) | :heavy_check_mark:                                                                          | N/A                                                                                         |
| `threadId`                                                                                  | *string*                                                                                    | :heavy_check_mark:                                                                          | The ID of the thread to modify. Only the `metadata` can be modified.                        |


### Response

**[?\Openai\SDK\Models\Operations\ModifyThreadResponse](../../Models/Operations/ModifyThreadResponse.md)**


## submitToolOuputsToRun

When a run has the `status: "requires_action"` and `required_action.type` is `submit_tool_outputs`, this endpoint can be used to submit the outputs from the tool calls once they're all completed. All outputs must be submitted in a single request.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK;
use \Openai\SDK\Models\Shared;
use \Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()->setSecurity($security)->build();

try {
        $submitToolOutputsRunRequest = new Shared\SubmitToolOutputsRunRequest();
    $submitToolOutputsRunRequest->toolOutputs = [
        new Shared\ToolOutputs(),
    ];

    $response = $sdk->assistants->submitToolOuputsToRun($submitToolOutputsRunRequest, 'string', 'string');

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `submitToolOutputsRunRequest`                                                                               | [\Openai\SDK\Models\Shared\SubmitToolOutputsRunRequest](../../Models/Shared/SubmitToolOutputsRunRequest.md) | :heavy_check_mark:                                                                                          | N/A                                                                                                         |
| `runId`                                                                                                     | *string*                                                                                                    | :heavy_check_mark:                                                                                          | The ID of the run that requires the tool output submission.                                                 |
| `threadId`                                                                                                  | *string*                                                                                                    | :heavy_check_mark:                                                                                          | The ID of the [thread](/docs/api-reference/threads) to which this run belongs.                              |


### Response

**[?\Openai\SDK\Models\Operations\SubmitToolOuputsToRunResponse](../../Models/Operations/SubmitToolOuputsToRunResponse.md)**

