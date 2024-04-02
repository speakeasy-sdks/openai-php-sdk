<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/** The format to audio in. Supported formats are `mp3`, `opus`, `aac`, `flac`, `wav`, and `pcm`. */
enum CreateSpeechRequestResponseFormat: string
{
    case Mp3 = 'mp3';
    case Opus = 'opus';
    case Aac = 'aac';
    case Flac = 'flac';
    case Wav = 'wav';
    case Pcm = 'pcm';
}
