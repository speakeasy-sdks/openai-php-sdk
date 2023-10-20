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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

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
```

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
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
```

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
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
```

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
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
```

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
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
```

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Openai\SDK\Gpt;
use \Openai\SDK\Models\Shared\Security;
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

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [audio](docs/sdks/audio/README.md)

* [createTranscription](docs/sdks/audio/README.md#createtranscription) - Transcribes audio into the input language.
* [createTranslation](docs/sdks/audio/README.md#createtranslation) - Translates audio into English.

### [chat](docs/sdks/chat/README.md)

* [createChatCompletion](docs/sdks/chat/README.md#createchatcompletion) - Creates a model response for the given chat conversation.

### [completions](docs/sdks/completions/README.md)

* [createCompletion](docs/sdks/completions/README.md#createcompletion) - Creates a completion for the provided prompt and parameters.

### [edits](docs/sdks/edits/README.md)

* [~~createEdit~~](docs/sdks/edits/README.md#createedit) - Creates a new edit for the provided input, instruction, and parameters. :warning: **Deprecated**

### [embeddings](docs/sdks/embeddings/README.md)

* [createEmbedding](docs/sdks/embeddings/README.md#createembedding) - Creates an embedding vector representing the input text.

### [files](docs/sdks/files/README.md)

* [createFile](docs/sdks/files/README.md#createfile) - Upload a file that can be used across various endpoints/features. Currently, the size of all the files uploaded by one organization can be up to 1 GB. Please [contact us](https://help.openai.com/) if you need to increase the storage limit.

* [deleteFile](docs/sdks/files/README.md#deletefile) - Delete a file.
* [downloadFile](docs/sdks/files/README.md#downloadfile) - Returns the contents of the specified file.
* [listFiles](docs/sdks/files/README.md#listfiles) - Returns a list of files that belong to the user's organization.
* [retrieveFile](docs/sdks/files/README.md#retrievefile) - Returns information about a specific file.

### [fineTunes](docs/sdks/finetunes/README.md)

* [~~cancelFineTune~~](docs/sdks/finetunes/README.md#cancelfinetune) - Immediately cancel a fine-tune job.
 :warning: **Deprecated**
* [~~createFineTune~~](docs/sdks/finetunes/README.md#createfinetune) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)
 :warning: **Deprecated**
* [~~listFineTuneEvents~~](docs/sdks/finetunes/README.md#listfinetuneevents) - Get fine-grained status updates for a fine-tune job.
 :warning: **Deprecated**
* [~~listFineTunes~~](docs/sdks/finetunes/README.md#listfinetunes) - List your organization's fine-tuning jobs
 :warning: **Deprecated**
* [~~retrieveFineTune~~](docs/sdks/finetunes/README.md#retrievefinetune) - Gets info about the fine-tune job.

[Learn more about fine-tuning](/docs/guides/legacy-fine-tuning)
 :warning: **Deprecated**

### [fineTuning](docs/sdks/finetuning/README.md)

* [cancelFineTuningJob](docs/sdks/finetuning/README.md#cancelfinetuningjob) - Immediately cancel a fine-tune job.

* [createFineTuningJob](docs/sdks/finetuning/README.md#createfinetuningjob) - Creates a job that fine-tunes a specified model from a given dataset.

Response includes details of the enqueued job including job status and the name of the fine-tuned models once complete.

[Learn more about fine-tuning](/docs/guides/fine-tuning)

* [listFineTuningEvents](docs/sdks/finetuning/README.md#listfinetuningevents) - Get status updates for a fine-tuning job.

* [listPaginatedFineTuningJobs](docs/sdks/finetuning/README.md#listpaginatedfinetuningjobs) - List your organization's fine-tuning jobs

* [retrieveFineTuningJob](docs/sdks/finetuning/README.md#retrievefinetuningjob) - Get info about a fine-tuning job.

[Learn more about fine-tuning](/docs/guides/fine-tuning)


### [images](docs/sdks/images/README.md)

* [createImage](docs/sdks/images/README.md#createimage) - Creates an image given a prompt.
* [createImageEdit](docs/sdks/images/README.md#createimageedit) - Creates an edited or extended image given an original image and a prompt.
* [createImageVariation](docs/sdks/images/README.md#createimagevariation) - Creates a variation of a given image.

### [models](docs/sdks/models/README.md)

* [deleteModel](docs/sdks/models/README.md#deletemodel) - Delete a fine-tuned model. You must have the Owner role in your organization to delete a model.
* [listModels](docs/sdks/models/README.md#listmodels) - Lists the currently available models, and provides basic information about each one such as the owner and availability.
* [retrieveModel](docs/sdks/models/README.md#retrievemodel) - Retrieves a model instance, providing basic information about the model such as the owner and permissioning.

### [moderations](docs/sdks/moderations/README.md)

* [createModeration](docs/sdks/moderations/README.md#createmoderation) - Classifies if text violates OpenAI's Content Policy
<!-- End SDK Available Operations -->



<!-- Start Dev Containers -->

<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->



### SDK Generated by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
