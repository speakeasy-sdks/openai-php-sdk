<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/** Must be one of `text` or `json_object`. */
enum CreateChatCompletionRequestType: string
{
    case Text = 'text';
    case JsonObject = 'json_object';
}
