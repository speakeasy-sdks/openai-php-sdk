<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


enum CreateImageRequestResponseFormatEnum: string
{
    case URL = 'url';
    case B64_JSON = 'b64_json';
}
