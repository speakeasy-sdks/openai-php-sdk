<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Operations;


/**
 * Sort order by the `created_at` timestamp of the objects. `asc` for ascending order and `desc` for descending order.
 * 
 * 
 */
enum QueryParamOrder: string
{
    case Asc = 'asc';
    case Desc = 'desc';
}
