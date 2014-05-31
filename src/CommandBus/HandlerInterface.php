<?php
namespace Cianflone\Again\CommandBus;

interface HandlerInterface
{
    public function handle($request);
}
