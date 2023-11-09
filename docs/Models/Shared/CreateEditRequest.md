# CreateEditRequest


## Fields

| Field                                                                                                                                                                                                                                                                                                             | Type                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `input`                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                | The input text to use as a starting point for the edit.                                                                                                                                                                                                                                                           | What day of the wek is it?                                                                                                                                                                                                                                                                                        |
| `instruction`                                                                                                                                                                                                                                                                                                     | *string*                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                | The instruction that tells the model how to edit the prompt.                                                                                                                                                                                                                                                      | Fix the spelling mistakes.                                                                                                                                                                                                                                                                                        |
| `model`                                                                                                                                                                                                                                                                                                           | *mixed*                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                | ID of the model to use. You can use the `text-davinci-edit-001` or `code-davinci-edit-001` model with this endpoint.                                                                                                                                                                                              | text-davinci-edit-001                                                                                                                                                                                                                                                                                             |
| `n`                                                                                                                                                                                                                                                                                                               | *?int*                                                                                                                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                | How many edits to generate for the input and instruction.                                                                                                                                                                                                                                                         | 1                                                                                                                                                                                                                                                                                                                 |
| `temperature`                                                                                                                                                                                                                                                                                                     | *?float*                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                | What sampling temperature to use, between 0 and 2. Higher values like 0.8 will make the output more random, while lower values like 0.2 will make it more focused and deterministic.<br/><br/>We generally recommend altering this or `top_p` but not both.<br/>                                                  | 1                                                                                                                                                                                                                                                                                                                 |
| `topP`                                                                                                                                                                                                                                                                                                            | *?float*                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                | An alternative to sampling with temperature, called nucleus sampling, where the model considers the results of the tokens with top_p probability mass. So 0.1 means only the tokens comprising the top 10% probability mass are considered.<br/><br/>We generally recommend altering this or `temperature` but not both.<br/> | 1                                                                                                                                                                                                                                                                                                                 |