<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * Two content moderations models are available: `text-moderation-stable` and `text-moderation-latest`.
 * 
 * 
 * The default is `text-moderation-latest` which will be automatically upgraded over time. This ensures you are always using our most accurate model. If you use `text-moderation-stable`, we will provide advanced notice before updating the model. Accuracy of `text-moderation-stable` may be slightly lower than for `text-moderation-latest`.
 * 
 */
enum CreateModerationRequestModel2: string
{
    case TextModerationLatest = 'text-moderation-latest';
    case TextModerationStable = 'text-moderation-stable';
}