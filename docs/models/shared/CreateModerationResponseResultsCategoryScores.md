# CreateModerationResponseResultsCategoryScores

A list of the categories along with their scores as predicted by model.


## Fields

| Field                                          | Type                                           | Required                                       | Description                                    |
| ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- | ---------------------------------------------- |
| `hate`                                         | *float*                                        | :heavy_check_mark:                             | The score for the category 'hate'.             |
| `hateThreatening`                              | *float*                                        | :heavy_check_mark:                             | The score for the category 'hate/threatening'. |
| `selfHarm`                                     | *float*                                        | :heavy_check_mark:                             | The score for the category 'self-harm'.        |
| `sexual`                                       | *float*                                        | :heavy_check_mark:                             | The score for the category 'sexual'.           |
| `sexualMinors`                                 | *float*                                        | :heavy_check_mark:                             | The score for the category 'sexual/minors'.    |
| `violence`                                     | *float*                                        | :heavy_check_mark:                             | The score for the category 'violence'.         |
| `violenceGraphic`                              | *float*                                        | :heavy_check_mark:                             | The score for the category 'violence/graphic'. |