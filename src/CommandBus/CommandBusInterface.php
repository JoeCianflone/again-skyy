<?php
namespace Cianflone\Again\CommandBus;

interface CommandBusInterface
{
    public function execute($command);
}
