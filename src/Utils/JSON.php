<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Openai\SDK\Utils;

use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerBuilder;

class JSON
{
    public static function createSerializer(): \JMS\Serializer\Serializer
    {
        return SerializerBuilder::create()->configureHandlers(
            static function (HandlerRegistry $registry): void {
                $registry->registerSubscribingHandler(new MixedJSONHandler());
                $registry->registerSubscribingHandler(new EnumHandler());
            },
        )->addDefaultHandlers()->build();
    }
}