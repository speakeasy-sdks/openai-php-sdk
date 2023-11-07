# ChatCompletionMessageToolCall


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `function`                                                              | [\Openai\SDK\Models\Shared\FunctionT](../../models/shared/FunctionT.md) | :heavy_check_mark:                                                      | The function that the model called.                                     |
| `id`                                                                    | *string*                                                                | :heavy_check_mark:                                                      | The ID of the tool call.                                                |
| `type`                                                                  | [\Openai\SDK\Models\Shared\Type](../../models/shared/Type.md)           | :heavy_check_mark:                                                      | The type of the tool. Currently, only `function` is supported.          |