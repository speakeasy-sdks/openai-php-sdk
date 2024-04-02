<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


class CreateEmbeddingRequest
{
    /**
     * The number of dimensions the resulting output embeddings should have. Only supported in `text-embedding-3` and later models.
     * 
     * 
     * 
     * @var ?int $dimensions
     */
	#[\JMS\Serializer\Annotation\SerializedName('dimensions')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $dimensions = null;
    
    /**
     * The format to return the embeddings in. Can be either `float` or [`base64`](https://pypi.org/project/pybase64/).
     * 
     * @var ?\Openai\SDK\Models\Shared\EncodingFormat $encodingFormat
     */
	#[\JMS\Serializer\Annotation\SerializedName('encoding_format')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\EncodingFormat>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?EncodingFormat $encodingFormat = null;
    
    /**
     * Input text to embed, encoded as a string or array of tokens. To embed multiple inputs in a single request, pass an array of strings or array of token arrays. The input must not exceed the max input tokens for the model (8192 tokens for `text-embedding-ada-002`), cannot be an empty string, and any array must be 2048 dimensions or less. [Example Python code](https://cookbook.openai.com/examples/how_to_count_tokens_with_tiktoken) for counting tokens.
     * 
     * 
     * 
     * @var mixed $input
     */
	#[\JMS\Serializer\Annotation\SerializedName('input')]
    #[\JMS\Serializer\Annotation\Type('mixed')]
    public mixed $input;
    
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
		$this->dimensions = null;
		$this->encodingFormat = null;
		$this->input = null;
		$this->model = null;
		$this->user = null;
	}
}
