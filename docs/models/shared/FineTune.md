# FineTune

OK


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `createdAt`                                                       | *int*                                                             | :heavy_check_mark:                                                | N/A                                                               |
| `events`                                                          | array<[FineTuneEvent](../../models/shared/FineTuneEvent.md)>      | :heavy_minus_sign:                                                | N/A                                                               |
| `fineTunedModel`                                                  | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `hyperparams`                                                     | [FineTuneHyperparams](../../models/shared/FineTuneHyperparams.md) | :heavy_check_mark:                                                | N/A                                                               |
| `id`                                                              | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `model`                                                           | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `object`                                                          | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `organizationId`                                                  | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `resultFiles`                                                     | array<[OpenAIFile](../../models/shared/OpenAIFile.md)>            | :heavy_check_mark:                                                | N/A                                                               |
| `status`                                                          | *string*                                                          | :heavy_check_mark:                                                | N/A                                                               |
| `trainingFiles`                                                   | array<[OpenAIFile](../../models/shared/OpenAIFile.md)>            | :heavy_check_mark:                                                | N/A                                                               |
| `updatedAt`                                                       | *int*                                                             | :heavy_check_mark:                                                | N/A                                                               |
| `validationFiles`                                                 | array<[OpenAIFile](../../models/shared/OpenAIFile.md)>            | :heavy_check_mark:                                                | N/A                                                               |