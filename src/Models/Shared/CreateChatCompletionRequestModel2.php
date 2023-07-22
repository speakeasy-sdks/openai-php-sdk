<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/** ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API. */
enum CreateChatCompletionRequestModel2: string
{
    case Gpt4 = 'gpt-4';
    case Gpt40314 = 'gpt-4-0314';
    case Gpt40613 = 'gpt-4-0613';
    case Gpt432k = 'gpt-4-32k';
    case Gpt432k0314 = 'gpt-4-32k-0314';
    case Gpt432k0613 = 'gpt-4-32k-0613';
    case Gpt35Turbo = 'gpt-3.5-turbo';
    case Gpt35Turbo16k = 'gpt-3.5-turbo-16k';
    case Gpt35Turbo0301 = 'gpt-3.5-turbo-0301';
    case Gpt35Turbo0613 = 'gpt-3.5-turbo-0613';
    case Gpt35Turbo16k0613 = 'gpt-3.5-turbo-16k-0613';
}
