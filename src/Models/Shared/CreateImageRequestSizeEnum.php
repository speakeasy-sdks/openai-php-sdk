<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


enum CreateImageRequestSizeEnum: string
{
    case TWO_HUNDRED_AND_FIFTY_SIXX256 = '256x256';
    case FIVE_HUNDRED_AND_TWELVEX512 = '512x512';
    case ONE_THOUSAND_AND_TWENTY_FOURX1024 = '1024x1024';
}
