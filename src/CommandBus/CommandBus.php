<?php
namespace Cianflone\Again\CommandBus;

use Illuminate\Foundation\Application;

class CommandBus implements CommandBusInterface
{
    private $app;
    private $inflector;

    public function __construct(Application $app, CommandNameInflector $inflector)
    {
        $this->app = $app;
        $this->inflector = $inflector;
    }

    public function execute($command)
    {
        return $this->getHandler($command)->handle($command);
    }

    private function getHandler($command)
    {
        // Resolves class out of Laravel IOC container...
        return $this->app->make($this->inflector->getHandlerClass($command));
    }
}
