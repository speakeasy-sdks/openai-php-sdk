<?php

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


enum ChatCompletionRequestMessageRoleEnum: string
{
    case SYSTEM = 'system';
    case USER = 'user';
    case ASSISTANT = 'assistant';
}
