# Results


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `categories`                                                                      | [\Openai\SDK\Models\Shared\Categories](../../Models/Shared/Categories.md)         | :heavy_check_mark:                                                                | A list of the categories, and whether they are flagged or not.                    |
| `categoryScores`                                                                  | [\Openai\SDK\Models\Shared\CategoryScores](../../Models/Shared/CategoryScores.md) | :heavy_check_mark:                                                                | A list of the categories along with their scores as predicted by model.           |
| `flagged`                                                                         | *bool*                                                                            | :heavy_check_mark:                                                                | Whether the content violates [OpenAI's usage policies](/policies/usage-policies). |