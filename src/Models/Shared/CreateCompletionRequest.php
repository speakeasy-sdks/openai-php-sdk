<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateCompletionRequest
{
    /**
     * Generates `best_of` completions server-side and returns the "best" (the one with the highest log probability per token). Results cannot be streamed.
     * 
     * 
     * When used with `n`, `best_of` controls the number of candidate completions and `n` specifies how many to return – `best_of` must be greater than `n`.
     * 
     * **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     * 
     * 
     * @var ?int $bestOf
     */
	#[\JMS\Serializer\Annotation\SerializedName('best_of')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $bestOf = null;
    
    /**
     * Echo back the prompt in addition to the completion
     * 
     * 
     * 
     * @var ?bool $echo
     */
	#[\JMS\Serializer\Annotation\SerializedName('echo')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $echo = null;
    
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
     * Modify the likelihood of specified tokens appearing in the completion.
     * 
     * 
     * Accepts a JSON object that maps tokens (specified by their token ID in the GPT tokenizer) to an associated bias value from -100 to 100. You can use this [tokenizer tool](/tokenizer?view=bpe) (which works for both GPT-2 and GPT-3) to convert text to token IDs. Mathematically, the bias is added to the logits generated by the model prior to sampling. The exact effect will vary per model, but values between -1 and 1 should decrease or increase likelihood of selection; values like -100 or 100 should result in a ban or exclusive selection of the relevant token.
     * 
     * As an example, you can pass `{"50256": -100}` to prevent the <|endoftext|> token from being generated.
     * 
     * 
     * @var ?array<string, int> $logitBias
     */
	#[\JMS\Serializer\Annotation\SerializedName('logit_bias')]
    #[\JMS\Serializer\Annotation\Type('array<string, int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $logitBias = null;
    
    /**
     * Include the log probabilities on the `logprobs` most likely tokens, as well the chosen tokens. For example, if `logprobs` is 5, the API will return a list of the 5 most likely tokens. The API will always return the `logprob` of the sampled token, so there may be up to `logprobs+1` elements in the response.
     * 
     * 
     * The maximum value for `logprobs` is 5.
     * 
     * 
     * @var ?int $logprobs
     */
	#[\JMS\Serializer\Annotation\SerializedName('logprobs')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $logprobs = null;
    
    /**
     * The maximum number of [tokens](/tokenizer) to generate in the completion.
     * 
     * 
     * The token count of your prompt plus `max_tokens` cannot exceed the model's context length. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     * 
     * 
     * @var ?int $maxTokens
     */
	#[\JMS\Serializer\Annotation\SerializedName('max_tokens')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $maxTokens = null;
    
    /**
     * ID of the model to use. You can use the [List models](/docs/api-reference/models/list) API to see all of your available models, or see our [Model overview](/docs/models/overview) for descriptions of them.
     * 
     * 
     * 
     * @var mixed $model
     */
	#[\JMS\Serializer\Annotation\SerializedName('model')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $model;
    
    /**
     * How many completions to generate for each prompt.
     * 
     * 
     * **Note:** Because this parameter generates many completions, it can quickly consume your token quota. Use carefully and ensure that you have reasonable settings for `max_tokens` and `stop`.
     * 
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
     * The prompt(s) to generate completions for, encoded as a string, array of strings, array of tokens, or array of token arrays.
     * 
     * 
     * Note that <|endoftext|> is the document separator that the model sees during training, so if a prompt is not specified the model will generate as if from the beginning of a new document.
     * 
     * 
     * @var mixed $prompt
     */
	#[\JMS\Serializer\Annotation\SerializedName('prompt')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $prompt;
    
    /**
     * If specified, our system will make a best effort to sample deterministically, such that repeated requests with the same `seed` and parameters should return the same result.
     * 
     * 
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
     * Up to 4 sequences where the API will stop generating further tokens. The returned text will not contain the stop sequence.
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
     * Whether to stream back partial progress. If set, tokens will be sent as data-only [server-sent events](https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events#Event_stream_format) as they become available, with the stream terminated by a `data: [DONE]` message. [Example Python code](https://cookbook.openai.com/examples/how_to_stream_completions).
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
     * The suffix that comes after a completion of inserted text.
     * 
     * @var ?string $suffix
     */
	#[\JMS\Serializer\Annotation\SerializedName('suffix')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $suffix = null;
    
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
		$this->bestOf = null;
		$this->echo = null;
		$this->frequencyPenalty = null;
		$this->logitBias = null;
		$this->logprobs = null;
		$this->maxTokens = null;
		$this->model = null;
		$this->n = null;
		$this->presencePenalty = null;
		$this->prompt = null;
		$this->seed = null;
		$this->stop = null;
		$this->stream = null;
		$this->suffix = null;
		$this->temperature = null;
		$this->topP = null;
		$this->user = null;
	}
}
