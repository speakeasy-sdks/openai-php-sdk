<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


enum ChatCompletionResponseMessageRoleEnum: string
{
    case SYSTEM = 'system';
    case USER = 'user';
    case ASSISTANT = 'assistant';
}
