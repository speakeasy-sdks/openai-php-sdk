# CreateCompletionResponseChoices


## Fields

| Field                                                                                                                                                                                                                                                                                                     | Type                                                                                                                                                                                                                                                                                                      | Required                                                                                                                                                                                                                                                                                                  | Description                                                                                                                                                                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `finishReason`                                                                                                                                                                                                                                                                                            | [\Openai\SDK\Models\Shared\CreateCompletionResponseFinishReason](../../Models/Shared/CreateCompletionResponseFinishReason.md)                                                                                                                                                                             | :heavy_check_mark:                                                                                                                                                                                                                                                                                        | The reason the model stopped generating tokens. This will be `stop` if the model hit a natural stop point or a provided stop sequence,<br/>`length` if the maximum number of tokens specified in the request was reached,<br/>or `content_filter` if content was omitted due to a flag from our content filters.<br/> |
| `index`                                                                                                                                                                                                                                                                                                   | *int*                                                                                                                                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                                                                                                                                        | N/A                                                                                                                                                                                                                                                                                                       |
| `logprobs`                                                                                                                                                                                                                                                                                                | [\Openai\SDK\Models\Shared\Logprobs](../../Models/Shared/Logprobs.md)                                                                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                                                                                                                                        | N/A                                                                                                                                                                                                                                                                                                       |
| `text`                                                                                                                                                                                                                                                                                                    | *string*                                                                                                                                                                                                                                                                                                  | :heavy_check_mark:                                                                                                                                                                                                                                                                                        | N/A                                                                                                                                                                                                                                                                                                       |