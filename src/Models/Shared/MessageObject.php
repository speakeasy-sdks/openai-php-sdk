<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * MessageObject - Represents a message within a [thread](/docs/api-reference/threads).
 * 
 * @package Openai\SDK\Models\Shared
 * @access public
 */
class MessageObject
{
    /**
     * If applicable, the ID of the [assistant](/docs/api-reference/assistants) that authored this message.
     * 
     * @var string $assistantId
     */
	#[\JMS\Serializer\Annotation\SerializedName('assistant_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $assistantId;
    
    /**
     * The Unix timestamp (in seconds) for when the message was completed.
     * 
     * @var int $completedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('completed_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $completedAt;
    
    /**
     * The content of the message in array of text and/or images.
     * 
     * @var array<mixed> $content
     */
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('array<mixed>')]
    public array $content;
    
    /**
     * The Unix timestamp (in seconds) for when the message was created.
     * 
     * @var int $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $createdAt;
    
    /**
     * A list of [file](/docs/api-reference/files) IDs that the assistant should use. Useful for tools like retrieval and code_interpreter that can access files. A maximum of 10 files can be attached to a message.
     * 
     * @var array<string> $fileIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('file_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $fileIds;
    
    /**
     * The identifier, which can be referenced in API endpoints.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The Unix timestamp (in seconds) for when the message was marked as incomplete.
     * 
     * @var int $incompleteAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('incomplete_at')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $incompleteAt;
    
    /**
     * On an incomplete message, details about why the message is incomplete.
     * 
     * @var \Openai\SDK\Models\Shared\IncompleteDetails $incompleteDetails
     */
	#[\JMS\Serializer\Annotation\SerializedName('incomplete_details')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\IncompleteDetails')]
    public IncompleteDetails $incompleteDetails;
    
    /**
     * Set of 16 key-value pairs that can be attached to an object. This can be useful for storing additional information about the object in a structured format. Keys can be a maximum of 64 characters long and values can be a maxium of 512 characters long.
     * 
     * 
     * 
     * @var \Openai\SDK\Models\Shared\MessageObjectMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('Openai\SDK\Models\Shared\MessageObjectMetadata')]
    public MessageObjectMetadata $metadata;
    
    /**
     * The object type, which is always `thread.message`.
     * 
     * @var \Openai\SDK\Models\Shared\MessageObjectObject $object
     */
	#[\JMS\Serializer\Annotation\SerializedName('object')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\MessageObjectObject>')]
    public MessageObjectObject $object;
    
    /**
     * The entity that produced the message. One of `user` or `assistant`.
     * 
     * @var \Openai\SDK\Models\Shared\MessageObjectRole $role
     */
	#[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\MessageObjectRole>')]
    public MessageObjectRole $role;
    
    /**
     * If applicable, the ID of the [run](/docs/api-reference/runs) associated with the authoring of this message.
     * 
     * @var string $runId
     */
	#[\JMS\Serializer\Annotation\SerializedName('run_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $runId;
    
    /**
     * The status of the message, which can be either `in_progress`, `incomplete`, or `completed`.
     * 
     * @var \Openai\SDK\Models\Shared\MessageObjectStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Openai\SDK\Models\Shared\MessageObjectStatus>')]
    public MessageObjectStatus $status;
    
    /**
     * The [thread](/docs/api-reference/threads) ID that this message belongs to.
     * 
     * @var string $threadId
     */
	#[\JMS\Serializer\Annotation\SerializedName('thread_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $threadId;
    
	public function __construct()
	{
		$this->assistantId = "";
		$this->completedAt = 0;
		$this->content = [];
		$this->createdAt = 0;
		$this->fileIds = [];
		$this->id = "";
		$this->incompleteAt = 0;
		$this->incompleteDetails = new \Openai\SDK\Models\Shared\IncompleteDetails();
		$this->metadata = new \Openai\SDK\Models\Shared\MessageObjectMetadata();
		$this->object = \Openai\SDK\Models\Shared\MessageObjectObject::ThreadMessage;
		$this->role = \Openai\SDK\Models\Shared\MessageObjectRole::User;
		$this->runId = "";
		$this->status = \Openai\SDK\Models\Shared\MessageObjectStatus::InProgress;
		$this->threadId = "";
	}
}
