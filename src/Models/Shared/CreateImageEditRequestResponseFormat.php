<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/** The format in which the generated images are returned. Must be one of `url` or `b64_json`. */
enum CreateImageEditRequestResponseFormat: string
{
    case Url = 'url';
    case B64Json = 'b64_json';
}
