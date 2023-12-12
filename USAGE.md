<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Openai\SDK;
use Openai\SDK\Models\Shared;
use Openai\SDK\Models\Operations;

$security = new Shared\Security();
$security->apiKeyAuth = '<YOUR_BEARER_TOKEN_HERE>';

$sdk = SDK\Gpt::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->assistants->cancelRun('string', 'string');

    if ($response->runObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->