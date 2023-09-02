<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Models\Shared;


/**
 * The number of epochs to train the model for. An epoch refers to one
 * 
 * full cycle through the training dataset.
 * 
 */
enum CreateFineTuningJobRequestHyperparametersNEpochs1: string
{
    case Auto = 'auto';
}