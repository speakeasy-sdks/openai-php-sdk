# CreateModerationResponseResultsCategories

A list of the categories, and whether they are flagged or not.


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `hate`                                                 | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'hate'.             |
| `hateThreatening`                                      | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'hate/threatening'. |
| `selfHarm`                                             | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'self-harm'.        |
| `sexual`                                               | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'sexual'.           |
| `sexualMinors`                                         | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'sexual/minors'.    |
| `violence`                                             | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'violence'.         |
| `violenceGraphic`                                      | *bool*                                                 | :heavy_check_mark:                                     | Whether the content was flagged as 'violence/graphic'. |