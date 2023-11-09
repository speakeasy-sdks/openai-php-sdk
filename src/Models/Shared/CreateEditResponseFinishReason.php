<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * The reason the model stopped generating tokens. This will be `stop` if the model hit a natural stop point or a provided stop sequence,
 * 
 * `length` if the maximum number of tokens specified in the request was reached,
 * or `content_filter` if content was omitted due to a flag from our content filters.
 * 
 */
enum CreateEditResponseFinishReason: string
{
    case Stop = 'stop';
    case Length = 'length';
}