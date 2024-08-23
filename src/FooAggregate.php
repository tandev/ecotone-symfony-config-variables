<?php

namespace App;

use Ecotone\Messaging\Attribute\Parameter\ConfigurationVariable;
use Ecotone\Modelling\Attribute\Aggregate;
use Ecotone\Modelling\Attribute\CommandHandler;

#[Aggregate]
class FooAggregate
{
    #[CommandHandler()]
    public static function create(
        CreateFooCommand $command,
        #[ConfigurationVariable("app.foobar")] int $foobarParameter
    ): self
    {
        return new FooAggregate(1);
    }
}