<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;

use \Openai\SDK\Utils\SpeakeasyMetadata;
class CreateTranscriptionRequest1
{
    /**
     * The audio file object (not file name) to transcribe, in one of these formats: mp3, mp4, mpeg, mpga, m4a, wav, or webm.
     * 
     * 
     * 
     * @var \Openai\SDK\Models\Shared\CreateTranscriptionRequestFile $file
     */
	#[SpeakeasyMetadata('multipartForm:file=true')]
    public CreateTranscriptionRequestFile $file;
    
    /**
     * The language of the input audio. Supplying the input language in [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) format will improve accuracy and latency.
     * 
     * 
     * 
     * @var ?string $language
     */
	#[SpeakeasyMetadata('multipartForm:name=language')]
    public ?string $language = null;
    
    /**
     * ID of the model to use. Only `whisper-1` is currently available.
     * 
     * 
     * 
     * @var mixed $model
     */
	#[SpeakeasyMetadata('multipartForm:name=model,json=true')]
    public mixed $model;
    
    /**
     * An optional text to guide the model's style or continue a previous audio segment. The [prompt](/docs/guides/speech-to-text/prompting) should match the audio language.
     * 
     * 
     * 
     * @var ?string $prompt
     */
	#[SpeakeasyMetadata('multipartForm:name=prompt')]
    public ?string $prompt = null;
    
    /**
     * The format of the transcript output, in one of these options: json, text, srt, verbose_json, or vtt.
     * 
     * 
     * 
     * @var ?\Openai\SDK\Models\Shared\CreateTranscriptionRequestResponseFormat $responseFormat
     */
	#[SpeakeasyMetadata('multipartForm:name=response_format')]
    public ?CreateTranscriptionRequestResponseFormat $responseFormat = null;
    
    /**
     * The sampling temperature, between 0 and 1. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic. If set to 0, the model will use [log probability](https://en.wikipedia.org/wiki/Log_probability) to automatically increase the temperature until certain thresholds are hit.
     * 
     * 
     * 
     * @var ?float $temperature
     */
	#[SpeakeasyMetadata('multipartForm:name=temperature')]
    public ?float $temperature = null;
    
	public function __construct()
	{
		$this->file = new \Openai\SDK\Models\Shared\CreateTranscriptionRequestFile();
		$this->language = null;
		$this->model = null;
		$this->prompt = null;
		$this->responseFormat = null;
		$this->temperature = null;
	}
}
