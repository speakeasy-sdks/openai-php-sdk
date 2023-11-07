# Model

Describes an OpenAI model offering that can be used with the API.


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `created`                                                                   | *int*                                                                       | :heavy_check_mark:                                                          | The Unix timestamp (in seconds) when the model was created.                 |
| `id`                                                                        | *string*                                                                    | :heavy_check_mark:                                                          | The model identifier, which can be referenced in the API endpoints.         |
| `object`                                                                    | [\Openai\SDK\Models\Shared\ModelObject](../../models/shared/ModelObject.md) | :heavy_check_mark:                                                          | The object type, which is always "model".                                   |
| `ownedBy`                                                                   | *string*                                                                    | :heavy_check_mark:                                                          | The organization that owns the model.                                       |