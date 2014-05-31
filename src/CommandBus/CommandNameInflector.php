<?php
namespace Cianflone\Again\CommandBus;

use NoHandlerExistsException;

class CommandNameInflector
{
    public function getHandlerClass($command)
    {

        $handler = str_replace('Command', 'Handler', get_class($command));

        if (! class_exists($handler)) {
            $message = "Handler [$handler] does not exist";
            throw new NoHandlerExistsException($message);
        }

        return $handler;
    }
}
