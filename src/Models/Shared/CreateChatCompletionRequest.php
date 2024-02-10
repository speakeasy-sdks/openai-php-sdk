<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateChatCompletionRequest
{
    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model's likelihood to repeat the same line verbatim.
     * 
     * 
     * [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     * 
     * 
     * @var ?float $frequencyPenalty
     */
	#[\JMS\Serializer\Annotation\SerializedName('frequency_penalty')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $frequencyPenalty = null;
    
    /**
     * Deprecated in favor of `tool_choice`.
     * 
     * 
     * Controls which (if any) function is called by the model.
     * `none` means the model will not call a function and instead generates a message.
     * `auto` means the model can pick between generating a message or calling a function.
     * Specifying a particular function via `{"name": "my_function"}` forces the model to call that function.
     * 
     * `none` is the default when no functions are present. `auto` is the default if functions are present.
     * 
     * 
     * @var mixed $functionCall
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
	#[\JMS\Serializer\Annotation\SerializedName('function_call')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $functionCall = null;
    
    /**
     * Deprecated in favor of `tools`.
     * 
     * 
     * A list of functions the model may generate JSON inputs for.
     * 
     * 
     * @var ?array<\Openai\SDK\Models\Shared\ChatCompletionFunctions> $functions
     * @deprecated  field: This will be removed in a future release, please migrate away from it as soon as possible.
     */
	#[\JMS\Serializer\Annotation\SerializedName('functions')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\ChatCompletionFunctions>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $functions = null;
    
    /**
     * An unique identifier to a custom instance to execute the request. The requesting organization is required to have access to the instance.
     * 
     * @var ?string $instanceId
     */
	#[\JMS\Serializer\Annotation\SerializedName('instance_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $instanceId = null;
    
    /**
     * Modify the likelihood of specified tokens appearing in the completion.
     * 
     * 
     * Accepts a JSON object that maps tokens (specified by their token ID in the tokenizer) to an associated bias value from -100 to 100. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     * 
     * 
     * @var ?array<string, int> $logitBias
     */
	#[\JMS\Serializer\Annotation\SerializedName('logit_bias')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $logitBias = null;
    
    /**
     * Whether to return log probabilities of the output tokens or not. If true, returns the log probabilities of each output token returned in the `content` of `message`. This option is currently not available on the `gpt-4-vision-preview` model.
     * 
     * @var ?bool $logprobs
     */
	#[\JMS\Serializer\Annotation\SerializedName('logprobs')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $logprobs = null;
    
    /**
     * The maximum number of [tokens](/tokenizer) that can be generated in the chat completion.
     * 
     * 
     * The total length of input tokens and generated tokens is limited by the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     * 
     * 
     * @var ?int $maxTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('max_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxTokens = null;
    
    /**
     * A list of messages comprising the conversation so far. [Example Python code](https://cookbook.openai.com/examples/how_to_format_inputs_to_chatgpt_models).
     * 
     * @var array<mixed> $messages
     */
	#[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    public array $messages;
    
    /**
     * ID of the model to use. See the [model endpoint compatibility](/docs/models/model-endpoint-compatibility) table for details on which models work with the Chat API.
     * 
     * @var mixed $model
     */
	#[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $model;
    
    /**
     * How many chat completion choices to generate for each input message. Note that you will be charged based on the number of generated tokens across all of the choices. Keep `n` as `1` to minimize costs.
     * 
     * @var ?int $n
     */
	#[\JMS\Serializer\Annotation\SerializedName('n')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $n = null;
    
    /**
     * Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model's likelihood to talk about new topics.
     * 
     * 
     * [See more information about frequency and presence penalties.](/docs/guides/text-generation/parameter-details)
     * 
     * 
     * @var ?float $presencePenalty
     */
	#[\JMS\Serializer\Annotation\SerializedName('presence_penalty')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $presencePenalty = null;
    
    /**
     * An object specifying the format that the model must output. Compatible with [GPT-4 Turbo](/docs/models/gpt-4-and-gpt-4-turbo) and all GPT-3.5 Turbo models newer than `gpt-3.5-turbo-1106`.
     * 
     * 
     * Setting to `{ "type": "json_object" }` enables JSON mode, which guarantees the message the model generates is valid JSON.
     * 
     * **Important:** when using JSON mode, you **must** also instruct the model to produce JSON yourself via a system or user message. Without this, the model may generate an unending stream of whitespace until the generation reaches the token limit, resulting in a long-running and seemingly "stuck" request. Also note that the message content may be partially cut off if `finish_reason="length"`, which indicates the generation exceeded `max_tokens` or the conversation exceeded the max context length.
     * 
     * 
     * @var ?\Openai\SDK\Models\Shared\ResponseFormat $responseFormat
     */
	#[\JMS\Serializer\Annotation\SerializedName('response_format')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\ResponseFormat')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseFormat $responseFormat = null;
    
    /**
     * This feature is in Beta.
     * 
     * If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.
     * Determinism is not guaranteed, and you should refer to the `system_fingerprint` response parameter to monitor changes in the backend.
     * 
     * 
     * @var ?int $seed
     */
	#[\JMS\Serializer\Annotation\SerializedName('seed')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $seed = null;
    
    /**
     * Up to 4 sequences where the API will stop generating further tokens.
     * 
     * 
     * 
     * @var mixed $stop
     */
	#[\JMS\Serializer\Annotation\SerializedName('stop')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $stop = null;
    
    /**
     * If set, partial message deltas will be sent, like in ChatGPT. Tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
     * 
     * 
     * 
     * @var ?bool $stream
     */
	#[\JMS\Serializer\Annotation\SerializedName('stream')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $stream = null;
    
    /**
     * What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.
     * 
     * 
     * We generally recommend altering this or `top_p` but not both.
     * 
     * 
     * @var ?float $temperature
     */
	#[\JMS\Serializer\Annotation\SerializedName('temperature')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $temperature = null;
    
    /**
     * Controls which (if any) function is called by the model.
     * 
     * `none` means the model will not call a function and instead generates a message.
     * `auto` means the model can pick between generating a message or calling a function.
     * Specifying a particular function via `{"type": "function", "function": {"name": "my_function"}}` forces the model to call that function.
     * 
     * `none` is the default when no functions are present. `auto` is the default if functions are present.
     * 
     * 
     * @var mixed $toolChoice
     */
	#[\JMS\Serializer\Annotation\SerializedName('tool_choice')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public mixed $toolChoice = null;
    
    /**
     * A list of tools the model may call. Currently, only functions are supported as a tool. Use this to provide a list of functions the model may generate JSON inputs for.
     * 
     * 
     * 
     * @var ?array<\Openai\SDK\Models\Shared\ChatCompletionTool> $tools
     */
	#[\JMS\Serializer\Annotation\SerializedName('tools')]
    #[\JMS\Serializer\Annotation\Type('array<Openai\SDK\Models\Shared\ChatCompletionTool>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tools = null;
    
    /**
     * An integer between 0 and 5 specifying the number of most likely tokens to return at each token position, each with an associated log probability. `logprobs` must be set to `true` if this parameter is used.
     * 
     * @var ?int $topLogprobs
     */
	#[\JMS\Serializer\Annotation\SerializedName('top_logprobs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $topLogprobs = null;
    
    /**
     * An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.
     * 
     * 
     * We generally recommend altering this or `temperature` but not both.
     * 
     * 
     * @var ?float $topP
     */
	#[\JMS\Serializer\Annotation\SerializedName('top_p')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $topP = null;
    
    /**
     * A unique identifier representing your end-user, which can help OpenAI to monitor and detect abuse. [Learn more](/docs/guides/safety-best-practices/end-user-ids).
     * 
     * 
     * 
     * @var ?string $user
     */
	#[\JMS\Serializer\Annotation\SerializedName('user')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $user = null;
    
	public function __construct()
	{
		$this->frequencyPenalty = null;
		$this->functionCall = null;
		$this->functions = null;
		$this->instanceId = null;
		$this->logitBias = null;
		$this->logprobs = null;
		$this->maxTokens = null;
		$this->messages = [];
		$this->model = null;
		$this->n = null;
		$this->presencePenalty = null;
		$this->responseFormat = null;
		$this->seed = null;
		$this->stop = null;
		$this->stream = null;
		$this->temperature = null;
		$this->toolChoice = null;
		$this->tools = null;
		$this->topLogprobs = null;
		$this->topP = null;
		$this->user = null;
	}
}
