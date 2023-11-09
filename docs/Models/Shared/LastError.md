# LastError

The last error associated with this run. Will be `null` if there are no errors.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `code`                                                        | [\Openai\SDK\Models\Shared\Code](../../Models/Shared/Code.md) | :heavy_check_mark:                                            | One of `server_error` or `rate_limit_exceeded`.               |
| `message`                                                     | *string*                                                      | :heavy_check_mark:                                            | A human-readable description of the error.                    |