# RequiredAction

Details on the action required to continue the run. Will be `null` if no action is required.


## Fields

| Field                                                                                   | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `submitToolOutputs`                                                                     | [\Openai\SDK\Models\Shared\SubmitToolOutputs](../../Models/Shared/SubmitToolOutputs.md) | :heavy_check_mark:                                                                      | Details on the tool outputs needed for this run to continue.                            |
| `type`                                                                                  | [\Openai\SDK\Models\Shared\RunObjectType](../../Models/Shared/RunObjectType.md)         | :heavy_check_mark:                                                                      | For now, this is always `submit_tool_outputs`.                                          |