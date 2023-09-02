# ~~CreateEditResponse~~

OK

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `choices`                                                                            | array<[CreateEditResponseChoices](../../models/shared/CreateEditResponseChoices.md)> | :heavy_check_mark:                                                                   | A list of edit choices. Can be more than one if `n` is greater than 1.               |
| `created`                                                                            | *int*                                                                                | :heavy_check_mark:                                                                   | The Unix timestamp (in seconds) of when the edit was created.                        |
| `object`                                                                             | *string*                                                                             | :heavy_check_mark:                                                                   | The object type, which is always `edit`.                                             |
| `usage`                                                                              | [CompletionUsage](../../models/shared/CompletionUsage.md)                            | :heavy_check_mark:                                                                   | Usage statistics for the completion request.                                         |