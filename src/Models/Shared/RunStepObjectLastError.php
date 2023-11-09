<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * RunStepObjectLastError - The last error associated with this run step. Will be `null` if there are no errors.
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class RunStepObjectLastError
{
    /**
     * One of `server_error` or `rate_limit_exceeded`.
     * 
     * @var \Openai\SDK\Models\Shared\RunStepObjectCode $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\RunStepObjectCode>')]
    public RunStepObjectCode $code;
    
    /**
     * A human-readable description of the error.
     * 
     * @var string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
	public function __construct()
	{
		$this->code = \Openai\SDK\Models\Shared\RunStepObjectCode::ServerError;
		$this->message = "";
	}
}