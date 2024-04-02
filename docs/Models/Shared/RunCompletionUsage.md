# RunCompletionUsage

Usage statistics related to the run. This value will be `null` if the run is not in a terminal state (i.e. `in_progress`, `queued`, etc.).


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `completionTokens`                                           | *int*                                                        | :heavy_check_mark:                                           | Number of completion tokens used over the course of the run. |
| `promptTokens`                                               | *int*                                                        | :heavy_check_mark:                                           | Number of prompt tokens used over the course of the run.     |
| `totalTokens`                                                | *int*                                                        | :heavy_check_mark:                                           | Total number of tokens used (prompt + completion).           |